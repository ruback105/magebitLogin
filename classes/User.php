<?php

class User
{
    private $_db, $_data, $_session_name;

    /**
     * User constructor.
     * @param null $user
     */
    public function __construct($user = null)
    {
        $this->_db = DB::getInstance();

        $this->_session_name = Config::get('session/session_name');
    }

    /**
     * @param array $fields
     * @throws Exception
     */
    public function create($fields = array())
    {
        if (!$this->_db->insert('users', $fields)) {
            throw new Exception("Your account wasn't created because of the error");
        }
    }

    /**
     * @param null $user
     * @return bool
     */
    public function find($user = null)
    {
        if ($user) {
            $field = (is_numeric($user)) ? 'id' : 'email';
            $data = $this->_db->get('users', array($field, '=', $user));
        }
        if ($data->count()) {
            $this->_data = $data->first();
            return true;
        }
        return false;
    }

    /**
     * @param null $username
     * @param null $password
     * @return bool
     */
    public function login($username = null, $password = null)
    {
        $user = $this->find($username);
        if ($user) {
            if ($this->data()->password === Hash::make($password, $this->data()->salt)) {
                Session::put($this->_session_name, $this->data()->id);
                return true;
            }
        }
        return false;
    }

    /**
     * @return mixed
     */
    private function data()
    {
        return $this->_data;
    }

}
