<?php
class Ccc_User_Model_User extends Mage_Core_Model_Abstract {
	protected function _construct() {
		parent::_construct();
		$this->_init('user/user');
	}
}