<?php
// ���������� ���������� RedBeanPHP
require "libs/rb-mysql.php";

// ������������ � ��
R::setup( 'mysql:host=localhost;dbname=avtoriza',
        'root', '' );

// �������� ����������� � ��
if(!R::testConnection()) die('No DB connection!');

session_start(); // ������� ������ ��� �����������
?>