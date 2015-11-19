<?php
session_start();

if (isset($_GET['cell'])) {
	
	if (isset($_SESSION['sort'])) {
		if (isset($_SESSION['sort']['by']) && $_SESSION['sort']['by'] == $_GET['cell']) {
			switch($_SESSION['sort']['ad']) {
				case 'DESC':
				$_SESSION['sort']['ad'] = 'ASC';
				break;
				default:
				$_SESSION['sort']['ad'] = 'DESC';
			}
		} else {
			$_SESSION['sort'] = array(
				'by' => $_GET['cell'],
				'ad' => 'ASC'
			);
		}
	} else {
		$_SESSION['sort'] = array(
			'by' => $_GET['cell'],
			'ad' => 'ASC'
		);
	}
	
	echo json_encode(array('error' => false));
	
} else {
	echo json_encode(array('error' => true));
}