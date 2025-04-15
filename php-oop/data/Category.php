<?php

/*
- Metode ini menggunakan ENCAPSULATION yang artinya menjaga sebuah data yang ada didalam tidak bisa diakses atau diubah dari luar.
- Hal ini bertujuan agar Data tersebut tetap valid dan tidak bisa diubah seenaknya oleh pengguna lain.
- Encapuslation ini menggunakan properties acces modifier private.
- Jika ingin mengubah data tersebut untuk keperluan USER itu bisa menggunakan function getter dan setter.
*/

namespace Data;

class Category
{
	private string $name;
	private bool $expensive;

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name): void
	{
		if (trim($name) != "") {
			$this->name = $name;
		} /* Ini untuk melindungi jika ada data tidak valid yang masuk ke dalam object */
	}


	public function isExpensive(): bool
	{
		return $this->expensive;
	}

	public function setExpensive(bool $expensive): void
	{
		$this->expensive = $expensive;
	}
}
