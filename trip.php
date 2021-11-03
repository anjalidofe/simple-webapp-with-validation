<?php
    include("db_connect.php");
    class trip extends MySqlDb{
        public function insertData(){
            $mis = $_GET["MIS"];
            $name = $_GET["Name"];
            $age = $_GET["Age"];
            $email = $_GET["email"];
            $phone = $_GET["phone"];
            $branch = $_GET["branch"];
            $year = $_GET["year"];
            $gender = $_GET["gender"];
            $sql = "insert into trip values (\"{$mis}\", \"{$name}\", {$age}, \"{$email}\", \"{$gender}\", \"{$phone}\", \"{$branch}\", \"{$year}\");";
            $this->connect()->query($sql);
        }
    }
    $p = new trip;
    $p->insertData();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Student Passport Information</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background: rgb(2,0,36);
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(172,225,175,1) 35%, rgba(0,212,255,1) 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .cal:hover p, .cal:hover i, cal:hover::placeholder {  
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover, .cal input:hover, .cal select:hover, .cal textarea:hover{
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .cal{
        position: relative;
        margin-right: 88% ;
      }
      .item span, .cal span {
      color: red;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="passport.php">
        <div class="banner">
          <h1>Passport Information Form</h1>
        </div>
        <br/>
        <fieldset>
          <legend>Student Passport Information</legend>
          <div class="item">
            <label for="mis">MIS<span>*</span></label>
            <input id="mis" type="text" name="mis" required/>
          </div>
          <div class="item">
            <label for="pno">Passport Number<span>*</span></label>
            <input id="pno" type="text" name="pno" required/>
          </div>
          <div class="item">
            <label for="pname">Name on Passport<span>*</span></label>
            <input id="pname" type="text" name="pname" required/>
          </div>
          <div class = "cal">
            <label for="expiry">Expiry Date<span>*</span></label>
            <input id="expiry" type="date" name="expiry" required>
          </div>
          <div class="question">
            <label>Do you have a US Visa?</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="yes" id="radio_1" name="val"/>
                <label for="radio_1" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="no" id="radio_2" name="val" checked/>
                <label for="radio_2" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
        </fieldset>
        <br/>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>
