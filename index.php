<!DOCTYPE html>
<html>
<head>
<title>Photek's Glitches</title>
<link rel="stylesheet" href="skypeInvite.css"/>
<link rel="stylesheet" href="discordInvite.css"/>
<link rel="stylesheet" href="ont-awesome.min.css">
<link href="main.css" rel="stylesheet" type="text/css">

<style>
body {
  background-image: url('https://i.imgur.com/GuEK9KL.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

</style>
</head>
<body>
  <ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="contactform.php">Contact</a></li>
    <li><a href="#about">About</a></li>
  </ul>

<script src="/Javascript/discordInvite.js"></script>
<script src="/Javascript/main.js"></script>
<script>
  discordInvite.init({
  inviteCode: 'u8s6d3t',
  title: 'Photeks Glitches',
  miniMode: false,
  joinText : 'Join',
  joinedText: 'Joined',
  introText: 'Join the creator of glitches',
  hideIntro: false
});
discordInvite.render();
  $('').click(function(){
  $('#icon').toggleClass('fa-microphone-slash');

});
</script>
<div id="discordInviteBox" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"></div>
<div align="center">

   <div class="skype skype-microphone"><i id="icon" class="fa fa-microphone fa-2x"></i></div><br>
</div>


</body>
</html>
