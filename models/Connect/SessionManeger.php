<?php
class SessionManeger
{
    public function isLogged(): bool
    {
        return isset($_SESSION['editor_id']);
    }
    public function destroy(): void
    {
        session_destroy();
    }

    public function verify()
    {
        if (!$this->isLogged()) {
            echo "<script> alert('Error Login');location.href='./loginEditor'</script>";
        }
    }
}
