<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="src/css/main.css" rel="stylesheet" type="text/css"/>
         </head>
    <body>

        <div id="main-content">

            <div id="voilet">

            </div>
            <div id="row-1">
                <div id="orange">

                </div>
            </div>

            <div id="row-2">
                <div id="red">

                </div>
                <div id="blue">

                </div>
                <div id="black">

                </div>
            </div>

            <div id="row-3">
                <div id="green">

                </div>
            </div>
            <div id="row-4">
                <div id="yellow">

                </div>
            </div>
            <div id="row-5">
                <div id="grey">

                </div>
                <div id="pink">

                </div>
            </div>
            <!--over content -->
            <div id="slide">
				<div class="modal">
					<h2>This is the headline that will not wrap</h2>
					<p>
					Lorem ipsum dolor sit amet,  massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
					Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. 
					</p> 
				</div>
			</div>			
	</div>
	
	<script type="text/javascript">
	var overlay = document.getElementById('slide');
	
	function addClass(node, cl) {
		if (!node.length) node = [node];
		for (var n = 0, m = node.length; n < m; n++) {
			if ((" " + node[n].className + " ").indexOf(" "+cl+" ") >= 0) {
				node.className += " " + cl;
			}
		}
	}
	
	document.addEventListener('DOMContentLoaded', function () {
		overlay.style.display = 'none';
		console.log('Start. Element hidden');
		setTimeout(function(){
		overlay.style.display = '';
		setTimeout(function(){
		overlay.className = "overlay";
		console.log('Overlay added');
		}, 500);
		console.log('element displayed');
		},2500);
		
	});	
	
	</script>
	
    </body>
</html>
