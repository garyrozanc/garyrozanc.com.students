---
layout: default
permalink: gradebook/late.php
---

	<!-- Step 02 -->

	<main class="gradebook">
		
		<?php session_start(); ?>
		
		<script src="../js/jquery-3.4.1.min.js"></script>
		<script>
			$(document).ready(function(){
			    if (navigator.geolocation) {
			        navigator.geolocation.getCurrentPosition(showLocation);
			    } else { 
			        $('#location').html('Geolocation is not supported by this browser.');
			    }
			});
			
			function showLocation(position) {
			    var latitude = position.coords.latitude;
			    var longitude = position.coords.longitude;
			    $.ajax({
			        type:'POST',
			        url:'late-location.php',
			        data:'latitude='+latitude+'&longitude='+longitude,
			        success:function(msg){
			            if(msg){
			               $("#location").html(msg);
			            }else{
			                $("#location").html('Not Available');
			            }
			        }
			    });
			}
		</script>
		
		<section class="late">
			<a href="gradebook.php" class="btn-close"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path class="st0" d="M50 0C22.4 0 0 22.4 0 50c0 27.6 22.4 50 50 50s50-22.4 50-50C100 22.4 77.6 0 50 0zM80.7 70.1L70.1 80.7c-0.6 0.6-1.5 0.6-2.1 0l-18-18 -18 18c-0.6 0.6-1.5 0.6-2.1 0L19.3 70.1c-0.6-0.6-0.6-1.5 0-2.1l18-18 -18-18c-0.6-0.6-0.6-1.5 0-2.1l10.6-10.6c0.6-0.6 1.5-0.6 2.1 0l18 18 18-18c0.6-0.6 1.5-0.6 2.1 0l10.6 10.6c0.6 0.6 0.6 1.5 0 2.1l-18 18 18 18C81.3 68.6 81.3 69.5 80.7 70.1z"/></svg></a>
			<p id="location">Searching for your late arrival...</p>		
		</section>
		
	</main>
