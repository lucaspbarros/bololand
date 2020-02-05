<?php

function aviso($msg)
{
    echo "
        <div class='alert alert-success'>
            <h3> Avisos </h3>
            $msg
        </div>
    ";
}

function erro($msg)
{
    echo "
        <div class='alert alert-danger'>
            <h3> Erros </h3>
            $msg
        </div>
    ";
}

function alerta($msg)
{
    echo "
        <div class='alert alert-warning'>
            <h3> Alertas </h3>
            $msg
        </div>
    ";
}
