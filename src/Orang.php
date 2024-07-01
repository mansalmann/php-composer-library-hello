<?php

namespace Salman\Data{
    class Orang{
        public function __construct(public string $nama)
        {
            
        }

        public function sayHello(string $nama){
            return "Halo $nama, nama saya $this->nama";
        }
    }
}