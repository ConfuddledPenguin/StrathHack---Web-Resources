(function(){

	var width, height, canvas, ctx, nodes;

	var yBuffer = 25;

	setUp();
	startAnimation();

	function setUp(){

        var container = document.getElementById('animation-container');
		width = container.clientWidth;
		height = container.clientHeight;

		canvas = document.getElementById('canvas');
        canvas.width = width;
        canvas.height = height;
        ctx = canvas.getContext('2d');

        var mobile = false;
        if(height < 350 || width < 550){
            mobile = true;
        }

        if(!mobile){
            var xpointDiff = width * 0.0115; //20 on 1080p
            var ypointDiff = height * 0.037; //20;
        }else{
            var xpointDiff = width * 0.023;
            var ypointDiff = height * 0.045;
        }
        

        console.log(xpointDiff + ' ' + ypointDiff);
  

        nodes = [];
        for(var x = -200; x < width + 200; x = x + width/ xpointDiff) {

            var offset = Math.random();
        	var heightOffsetTop = offset * (height / 2.5)
        	var heightOffsetBottom = (1 - offset) * (height / 2.5)

            for(var y = yBuffer + heightOffsetTop; y < height - yBuffer*2 - heightOffsetBottom; y = y + height/ypointDiff) {
                var px = x + Math.random()*width/15;
                var py = y + Math.random()*height/15;
                var p = {x: px, originX: px, y: py, originY: py };

                var c = new Node(p, 'white');
            	p.circle = c;
            	nodes.push(p);
            }
        }

        for(var i = 0; i < nodes.length; i++) {
            var closest = [];
            var p1 = nodes[i];
            for(var j = 0; j < nodes.length; j++) {
                var p2 = nodes[j]
                if(!(p1 == p2)) {
                    var placed = false;
                    for(var k = 0; k < 7; k++) {
                        if(!placed) {
                            if(closest[k] == undefined) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }

                    for(var k = 0; k < 7; k++) {
                        if(!placed) {
                            if(getDistance(p1, p2) < getDistance(p1, closest[k])) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }
                }
            }
            p1.closest = closest;
            p1.connected = closest;
        }

        for(var i in nodes){

        	var node = nodes[i];

        	var considered = [],
        		i = Math.floor( (Math.random() * 4) + 2),
        		k = 0;
        	while(considered.length < i && k < node.closest.length){

        		k++;

        		var n1 = node.closest[Math.floor( (Math.random() * 7) )];

        		if(getDistance(node, n1) < 1000){

        			if(considered.indexOf(n1) === -1){
	        			considered.push(n1);
	        		}
        			
        		}

        	}

        	node.connected = considered;

        }

	}

	function startAnimation(){

		animate();
        for(var i in nodes) {
            shiftNode(nodes[i]);
        }

	}

	function animate(){

		ctx.clearRect(0,0,width,height);

		for(var i in nodes){

			var node = nodes[i];

			node.circle.draw();
			drawEdges(node);

		}

		requestAnimationFrame(animate);

	}

	function shiftNode(p) {

		var multi = Math.floor(Math.round((Math.random() * 100)) / 100) + 1;

		// console.log(multi);

		if(multi === 2){
			p.circle.count = 100;

			var interval = setInterval(function(){

				p.circle.count = p.circle.count - (100 / 500);

				if(p.circle.count < 0){
					clearInterval(interval);
				}

			}, 17)
		}
		

		var y = p.y-10+Math.random()*20*multi;

		//check y buffer
		if(y < yBuffer) y = yBuffer;
		if(y > height - yBuffer*2) y = height - yBuffer;

		if(y < p.originY - 50) y = p.originY - 50;
		if(y > p.originY + 50) y = p.originY + 50;

		var x = p.x-10+Math.random()*20*multi;

		if(x < p.originX - 50) x = p.originX - 50;
		if(x > p.originX + 50) x = p.originX + 50;

        TweenLite.to(p, 1+1*Math.random(), {x: x,
            y: y , ease:Circ.fade0,
            onComplete: function() {
                shiftNode(p);
            }});
    }

	function drawEdges(node){

		for(var i in node.connected) {
            ctx.beginPath();
            ctx.moveTo(node.x, node.y);
            ctx.lineTo(node.closest[i].x, node.closest[i].y);
            ctx.strokeStyle = 'white';
            ctx.lineWidth=0.5;
            ctx.stroke();
        }

	}

	function Node(position, color){

		var _this = this;

		_this.position = position;
		_this.color = color;
		_this.count = 0;

		_this.draw = function(){

			var r = 3;
			var r2 = 4;

            if(_this.count > 0){

            	if(_this.count> 75){

            		var p = 100 - (_this.count - 75) * 2;

            		r = r + r * p/100;
            		r2 = r*2

            	}else if(_this.count < 25){

            		var p = (_this.count * 4);

            		r = r + r * p/100;

            	}else if(_this.count > 25 && _this.count < 75){
            		r = r * 2;
            		r2 = r*2
            	}

            	ctx.beginPath()
	            ctx.arc(_this.position.x, _this.position.y, r2, 0, 2 * Math.PI, false);
	            var alpha = _this.count /100 / 2;
	            ctx.strokeStyle = 'rgba(255,255,255,' + alpha + ')';
            	ctx.lineWidth=0.5;
            	ctx.stroke();
            }

            ctx.beginPath();
            ctx.arc(_this.position.x, _this.position.y, r, 0, 2 * Math.PI, false);
            ctx.fillStyle = _this.color;
            ctx.fill();

		};

	}

	function getDistance(p1, p2) {
        return Math.sqrt(Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2));
    }

})();