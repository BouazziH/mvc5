<?php

$routes = array(
    array('home','default','index'),
    array('liste','abonne','listing'),
    array('detail','abonne','show',['id']),
    array('edit','abonne','edit',['id']),
    array('delete','abonne','delete',['id']),
    array('add','abonne','add')
);