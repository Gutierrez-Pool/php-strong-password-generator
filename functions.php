<?php
        $lunghezza = $_GET["lunghezza"];
        function password($lunghezza) {
            $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
            $password = "";
            for ($i = 0; $i < $lunghezza; $i++) {
                $password .= $characters[rand(0, strlen($characters) -1)];
            }
            return $password;
        }

        $password = password($lunghezza);

        echo "La tua password è: $password";
    ?>