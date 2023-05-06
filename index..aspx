<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Index.aspx.cs" Inherits="MyWebApp.Index" %>

<!DOCTYPE html>

<html>
<head>
	<title>Shape Creator</title>
	<style>
		#canvas {
			border: 1px solid black;
			margin: 10px;
			width: 500px;
			height: 500px;
		}
	</style>
</head>
<body>
	<form id="shapeForm" runat="server">
		<h1>Shape Creator</h1>
		<p>Select a shape to create:</p>
		<select id="shapeSelect" name="shapeSelect">
			<option value="triangle">Triangle</option>
			<option value="circle">Circle</option>
			<option value="square">Square</option>
		</select>
		<p>Enter dimensions:</p>
		<div>
			<label for="lengthInput">Length:</label>
			<input type="number" id="lengthInput" name="lengthInput">
		</div>
		<div>
			<label for="widthInput">Width:</label>
			<input type="number" id="widthInput" name="widthInput">
		</div>
		<div>
			<label for="heightInput">Height:</label>
			<input type="number" id="heightInput" name="heightInput">
		</div>
		<button type="submit" onclick="draw()">Draw</button>
		<button type="button" onclick="erase()">Erase</button>
		<canvas id="canvas"></canvas>
	</form>
	<script>
		var canvas = document.getElementById("canvas");
		var ctx = canvas.getContext("2d");

		function draw() {
			// Get shape selection and dimensions
			var shape = document.getElementById("shapeSelect").value;
			var length = document.getElementById("lengthInput").value;
			var width = document.getElementById("widthInput").value;
			var height = document.getElementById("heightInput").value;

			// Clear canvas
			ctx.clearRect(0, 0, canvas.width, canvas.height);

			// Draw shape based on selection
			if (shape === "triangle") {
				ctx.beginPath();
				ctx.moveTo(0, canvas.height);
				ctx.lineTo(length, canvas.height);
				ctx.lineTo(length / 2, canvas.height - height);
				ctx.closePath();
				ctx.stroke();
			} else if (shape === "circle") {
				ctx.beginPath();
				ctx.arc(canvas.width / 2, canvas.height / 2, length / 2, 0, 2 * Math.PI);
				ctx.stroke();
			} else if (shape === "square") {
				ctx.strokeRect((canvas.width - length) / 2, (canvas.height - width) / 2, length, width);
			}
		}

		function erase() {
			// Clear canvas
			ctx.clearRect(0, 0, canvas.width, canvas.height);
		}
	</script>
</body>
</html>
