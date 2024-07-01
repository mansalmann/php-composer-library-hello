<?php

namespace Salman\Belajar{
    class Orang{
        public function __construct(public string $nama)
        {
            
        }

        public function sayHello(string $nama = "Guest"){
            return "Halo $nama, nama saya $this->nama";
        }
    }
}