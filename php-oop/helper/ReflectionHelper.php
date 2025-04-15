<?php

class ReflectionHelper
{
    public static function newInstance(string $className, array $data)
    {
        if (!class_exists($className)) {
            throw new Exception("Class $className not found");
        }

        $reflection = new ReflectionClass($className);
        $constructor = $reflection->getConstructor();

        if (is_null($constructor)) {
            return new $className;
        }

        $params = $constructor->getParameters();
        $args = [];

        foreach ($params as $param) {
            $name = $param->getName();
            if (array_key_exists($name, $data)) {
                $args[] = $data[$name];
            } elseif ($param->isDefaultValueAvailable()) {
                $args[] = $param->getDefaultValue();
            } elseif ($param->allowsNull()) {
                $args[] = null;
            } else {
                throw new Exception("Missing value for parameter '$name'");
            }
        }

        return $reflection->newInstanceArgs($args);
    }
}
