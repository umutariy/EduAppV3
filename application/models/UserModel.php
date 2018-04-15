<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class UserModel extends CI_Model 
{
    /**
    * Constructor
    */
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    /**
    * Tis function allows the user o login using sessions
    **/
    public function login($email,$password)
    {
      $this->db->where("Email",$email);
      $this->db->where("Password",$password);
      
      $query=$this->db->get("users");
      if($query->num_rows()>0)
      {
        foreach($query->result() as $rows)
        {
            	//add all data to session
          $newdata = array(
           'UserId' => $rows->UserId,
           'FirstName' => $rows->FirstName,
           'LastName' => $rows->LastName,
           'Status' => $rows->Status,
           'PhoneNumber' => $rows->PhoneNumber,
           'Email' => $rows->Email,
           'Password' => $rows->Password,
           'logged_in' => TRUE,
           );
        }
        
        $this->session->set_userdata($newdata);
        return true;            
      }
      return false;
    }

    /**
    * This function registers a user
    **/
    public function registerUser()
    {
      $last_id="";
      $num=$this->input->post('phonenumber');
      $data=array(
       'FirstName'=>$this->input->post('firstname'),
       'LastName'=>$this->input->post('lastname'),
       'Status'=>$this->input->post('status'),
       'PhoneNumber'=>$num,
       'Email'=>$this->input->post('email'),
       'Password'=>md5($this->input->post('password'))
       );
      $this->db->insert('users',$data);

      //gets the id of the last record entered
      $last_id = $this->db->insert_id();

      //if status is student insert into student table
      if (($this->input->post('status'))=='Student') 
      {
        $data1=array(
          'StudentId'=>$last_id,
          'ClassId'=>$this->input->post('classes'),
          'Gender'=>$this->input->post('gender'));
          $this->db->insert('students',$data1);
      }
      //if status is teacher insert into teacher table
      if (($this->input->post('status'))=='Teacher') 
      {
        //insert into teacher
        $data1=array(
          'TeacherId'=>$last_id,
          'MaritalStatus'=>$this->input->post('maritalstatus'));
        $this->db->insert('teachers',$data1);

       // insert into teacher_class
        $data2=array(
          'ClassId'=>$this->input->post('classes'),
          'TeacherId'=>$last_id);
        $this->db->insert('teacher_class',$data2);
      }
      //if status is student insert into student table
      if (($this->input->post('status'))=='Parent') 
      {
        $data1=array(
          'ParentId'=>$last_id,
          'Occupation'=>$this->input->post('occupation'));
        $this->db->insert('parents',$data1);
      }

    }

    /**
    * This function logs out the user
    **/
    public function signout()
    {
      $newdata = array(
        'UserId' => '',
        'FirstName' => '',
        'LastName' => '',
        'Status' =>'',
        'PhoneNumber' => '',
        'Email' => '',
        'Password' => '',
        'logged_in' => false,
        );
      $this->session->unset_userdata($newdata );
      $this->session->sess_destroy();
    }

    /**
    * This function gets the list of the students
    **/
    public function students()
    {

      $this->db->select('FirstName, LastName, Email'); 
      $this->db->from('users');
      $this->db->join('student', 'users.UserId = student.StudentId');
      $this->db->join('teacher', 'teacher.ClassId = student.ClassId');
      $query = $this->db->get();

      if($query->num_rows() > 0) {
        $results = $query->result();
        return $results;
      }
      else
      {
        return false;
      }
    }

    /**
    * This function selects the category from the database
    **/
    public function selectClass()
    {
      $this->db->select('ClassId, ClassName'); 
      $this->db->from('class');
      $query = $this->db->get();

      if($query->num_rows() > 0) 
      {
        $results = $query->result();
        foreach ($results as $rows) 
        {
          echo "<option value=".$row["ClassId"].">".$row["ClassName"] ."</option>" ;
        }
        //return $results;
      }
      else
      {
        return false;
      }
    }

    /**
    *This function selects students
    **/

    public function selectStudents($studName, $studPhone)
    {
      $this->db->select('(FirstName, LastName) as Name', 'PhoneNumber'); 
      $this->db->from('users');
      $this->db->where('Name='.$studName and 'PhoneNumber='.$studPhone and 'Status=Student');
      $query = $this->db->get();
      if($query->num_rows() > 0) 
      {
        $results = $query->result();
        foreach ($results as $rows) 
        {
          echo '<tr>
            <td>'.$rows["Name"].' </td>
            <td>'.$rows["ClassName"].' </td>
            <td>'.$rows["Teacher"].' </td>
            <td>'.$rows["Status"].' </td>
          <tr>
          ';
        }
        //return $results;
      }
      else
      {
        return false;
      }
    }
  }

  ?>