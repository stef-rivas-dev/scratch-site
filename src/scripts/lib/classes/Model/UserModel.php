<?php

namespace Model;

class UserModel implements IModel {

	public function find($criteria) {
		echo "<h1>I'm the MODEL</h1>";
	}
}