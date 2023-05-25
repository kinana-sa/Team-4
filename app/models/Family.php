<?php
// declare (strict_types=1);
namespace App\Models;

require_once "Model.php";

class Family extends Model{

    protected string $first_name;
    protected string $middle_name;
    protected string $last_name;
    protected int $members;
    protected string $phone;
    protected string $job_status;
    protected int $address;

    public function getFirstName() {
        return $this->first_name;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    public function getMiddleName() {
        return $this->middle_name;
    }

    public function setMiddleName($middle_name) {
        $this->middle_name = $middle_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function getMembers() {
        return $this->members;
    }

    public function setMembers($members) {
        $this->members = $members;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getJobStatus() {
        return $this->job_status;
    }

    public function setJobStatus($job_status) {
        $this->job_status = $job_status;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }



}