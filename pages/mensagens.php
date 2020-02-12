<style>
    .aviso {
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
        min-width: 320px;
    }
</style>
<?php
function aviso($msg)
{
    echo "
        <div class='alert alert-success alert-dismissible fade show aviso' role='alert'>
            <h3> Avisos </h3>
            $msg
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
    ";
}

function erro($msg)
{
    echo "
        <div class='alert alert-danger alert-dismissible fade show aviso' role='alert'>
            <h3> Erros </h3>
            $msg
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
    ";
}

function alerta($msg)
{
    echo "
        <div class='alert alert-warning alert-dismissible fade show aviso' role='alert'>
            <h3> Alertas </h3>
            $msg
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
    ";
}
