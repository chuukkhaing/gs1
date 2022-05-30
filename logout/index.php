<?php
  session_start();
  unset($_SESSION['company_code']);
  unset($_SESSION['ticket_code']);
  header("Location: ../../regs1");
?>
