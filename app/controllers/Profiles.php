<?php
class Profiles extends Controller
{
    public function index()
    {
        $data = [];

        $this->view('profile', $data);
    }
}
