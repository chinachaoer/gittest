<?php
	class CategoryController extends Controller{
		public function index(){
			echo M()->table('category')->field('cartname',true)->select(false);
		}
	}
?>
