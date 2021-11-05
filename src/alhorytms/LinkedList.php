<?php

namespace CodeCamp\alhorytms;

class LinkedList {

	public $m;

	public function __construct() {
		$this->m = $this->merge($this->createList(), $this->createList2());
	}

	public function createList(){
		$n3 = new Node(10, null);
		$n2 = new Node(3, $n3);
		$n1 = new Node(1, $n2);
		return $n1;
	}

	public function createList2(){
		$n6 = new Node(9, null);
		$n5 = new Node(6, $n6);
		$n4 = new Node(5, $n5);
		return $n4;
	}

	public function merge($head1, $head2){
		$merged = new Node(null, null);
		$prev = $merged;

		while ($head1 != null && $head2 != null){
			if($head1->data <= $head2->data){
				$prev->next = $head1;
				$head1 = $head1->next;
			} else {
				$prev->next = $head2;
				$head2 = $head2->next;
			}
			$prev = $prev->next;
		}

		if($head1 === null){
			$prev->next = $head2;
		}
		if($head2 === null){
			$prev->next = $head1;
		}
		return $merged->next;
	}

}