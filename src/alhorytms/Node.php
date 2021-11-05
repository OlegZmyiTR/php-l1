<?php

namespace CodeCamp\alhorytms;

class Node {
	public function __construct( $data, $next ) {
		$this->data = $data;
		$this->next = $next;
	}
}