<%@ page import="beans.StudentsBean" %>
<%@ page import="java.util.ArrayList" %><%--
  Created by IntelliJ IDEA.
  User: vladp
  Date: 23.09.2017
  Time: 19:40
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1 laba</title>
  <link rel="stylesheet" href="styles.css">
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.validate.min.js"></script>
  <script type="text/javascript" src="validate.js"></script>
</head>
<header>
  <div id="logo" >
    <img src="images/image2.png">
  </div>
  <div id="about">
    WebSite developed by Promotorovv Vlad from P3211,variant 356.
  </div>
</header>
<body>
<div id="content" >
  <div id="description">
    <h1>What is helpSystems?</h1>
    HelpSystems is a free service developed by some student to help another students successfully do their homework.<br/>
    You only need to enter data and the program will do everything for you.
  </div>
  <div class="program">
    <div id="dataimage">
      <img src="images/image4.png">
    </div>
    <div class="form">
      <form method="post" class="data-form" id="myForm">
        <input type="text" id="enterX" placeholder="enterX"  name="enterX"/>
        <br/>
        <input type="text" id="enterY" placeholder="enterY"  name="enterY"/>
        <div id="chooseR">
          <h1>Choose R:</h1>
          <input type="checkbox" id="enterR1" name="R" value="1">
          <label for="R1">1</label>
          <input type="checkbox" id="enterR2" name="R" value="2">
          <label for="R2">2</label>
          <input type="checkbox" id="enterR3" name="R" value="3">
          <label for="R3">3</label>
          <input type="checkbox" id="enterR4" name="R" value="4">
          <label for="R4">4</label>
          <input type="checkbox" id="enterR5" name="R" value="5">
          <label for="R5">5</label>
        </div>
        <input type="submit" value="Calculate" id="button">
      </form>
    </div>
  </div>
  <div class="result">
      <%
        if(StudentsBean.sizeList()>0) {
          ArrayList<StudentsBean> list = StudentsBean.getList();
          for (StudentsBean bean:list) {
            out.println(bean.getResult());
          }
        }
      %>
  </div>
</div>
</body>
</html>