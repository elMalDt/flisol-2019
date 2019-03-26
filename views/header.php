<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Flisol</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".login-form").hide()
        $(".login").css("background", "none")

        $(".login").click(function(){
          $(".signup-form").hide()
          $(".login-form").show()
          $(".signup").css("background", "none")
          $(".login").css("background", "rgba(0,0,0,0.42)")
        })

        $(".signup").click(function(){
          $(".signup-form").show()
          $(".login-form").hide()
          $(".signup").css("background", "rgba(0,0,0,0.42)")
          $(".login").css("background", "none")
        })

        $(".btn").click(function(){
            $(".input").val("")
        })

      })
    </script>
  </head>
