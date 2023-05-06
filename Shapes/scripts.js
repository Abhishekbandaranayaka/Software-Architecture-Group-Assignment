$(document).ready(function () {
  var calcBtns = $(".calc-btn");

  // Select Shape
  $(".shape-btn").click(function () {
    resetPopups();
    $("input").val("");
    var shape = $(this).data("shape");
    $("#calc-type").modal("show");

    calcBtns.off("click").click(function () {
      var calc = $(this).data("calc");
      displayShapeModel(shape, calc);
    });
  });

  // Display model according to shape
  function displayShapeModel(shape, calc) {
    resetPopups();
    $("#" + shape + "-modal").modal("show");

    $("#circle-calc").click(function () {
      circleCalculations(calc);
    });

    $("#triangle-calc").click(function () {
      triangleCalculations(calc);
    });

    $("#rectangle-calc").click(function () {
      rectangleCalculations(calc);
    });
  }

  // Calculate circle values
  function circleCalculations(calc) {
    resetPopups();
    var radius = $("#circle-radius").val();
    var result;
    if (calc == "perimeter") {
      result = 2 * Math.PI * radius;
      $(".result").text("Perimeter  of the circle: " + result.toFixed(2));
    } else {
      result = Math.PI * radius * radius;
      $(".result").text("Area of the circle: " + result.toFixed(2));
    }
    drawCircle(radius);
    $("#result-modal").modal("show");
  }
  // Calculate triangle values
  function triangleCalculations(calc) {
    resetPopups();
    var base = $("#triangle-base").val();
    var height = $("#triangle-height").val();
    var result;
    if (calc == "perimeter") {
      result = 2 * base + 2 * height;
      $(".result").text("Perimeter of the triangle: " + result.toFixed(2));
    } else {
      result = 0.5 * base * height;
      $(".result").text("Area  of the triangle: " + result.toFixed(2));
    }
    drawTriangle(base, height);
    $("#result-modal").modal("show");
  }

  // Calculate rectangle values
  function rectangleCalculations(calc) {
    resetPopups();
    var length = $("#rectangle-length").val();
    var width = $("#rectangle-width").val();
    var result;
    if (calc == "perimeter") {
      result = 2 * length + 2 * width;
      $(".result").text("Perimeter of the rectangle: " + result.toFixed(2));
    } else {
      result = length * width;
      $(".result").text("Area  of the rectangle: " + result.toFixed(2));
    }
    drawRectangle(length, width);
    $("#result-modal").modal("show");
  }

  // Draw circle

  function drawCircle(radius) {
    resetCanvas();
    let canvas = document.querySelector(".diagram");
    let ctx = canvas.getContext("2d");

    // Calculate the diameter of the circle
    let diameter = radius * 2;

    // Check if the diameter is greater than the canvas width or height
    if (diameter > canvas.width || diameter > canvas.height) {
      // Scale down the canvas size to fit the circle
      let canvasSize = Math.max(diameter, canvas.width, canvas.height) + 50;
      if (canvasSize < 500) {
        canvasSize = 500;
      }
      canvas.width = canvasSize;
      canvas.height = canvasSize;

      // Resize the modal container
      let modal = document.querySelector("#result-modal .modal-dialog");
      modal.style.maxWidth = `${canvasSize}px`;
      modal.style.width = `${canvasSize}px`;
    }

    // Clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw the circle
    ctx.beginPath();
    ctx.arc(canvas.width / 2, canvas.height / 2, radius, 0, 2 * Math.PI);
    ctx.stroke();
  }

  // Draw triangle
  function drawTriangle(base, height) {
    resetCanvas();
    let canvas = document.querySelector(".diagram");
    let ctx = canvas.getContext("2d");

    // Calculate the maximum dimension of the triangle
    let maxDimension = Math.max(base, height);

    // Check if the maximum dimension is greater than the canvas width or height
    if (maxDimension > canvas.width || maxDimension > canvas.height) {
      // Scale down the canvas size to fit the triangle
      let canvasSize = Math.max(maxDimension, canvas.width, canvas.height) + 50;
      if (canvasSize < 500) {
        canvasSize = 500;
      }
      canvas.width = canvasSize;
      canvas.height = canvasSize;

      // Resize the modal container
      let modal = document.querySelector("#result-modal .modal-dialog");
      modal.style.maxWidth = `${canvasSize}px`;
      modal.style.width = `${canvasSize}px`;
    }

    // Clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Calculate the coordinates of the triangle's points
    let x1 = canvas.width / 2 - base / 2;
    let y1 = canvas.height / 2 + height / 2;
    let x2 = canvas.width / 2;
    let y2 = canvas.height / 2 - height / 2;
    let x3 = canvas.width / 2 + base / 2;
    let y3 = canvas.height / 2 + height / 2;

    // Draw the triangle
    ctx.beginPath();
    ctx.moveTo(x1, y1);
    ctx.lineTo(x2, y2);
    ctx.lineTo(x3, y3);
    ctx.closePath();
    ctx.stroke();
  }

  // Draw rectangle
  function drawRectangle(length, width) {
    resetCanvas();
    let canvas = document.querySelector(".diagram");
    let ctx = canvas.getContext("2d");

    // Find the maximum value of length and width
    let maxDimension = Math.max(length, width);

    // Check if the maximum dimension is greater than the canvas width or height
    if (maxDimension > canvas.width || maxDimension > canvas.height) {
      // Scale up the canvas size to fit the rectangle
      let canvasSize = Math.max(maxDimension, canvas.width, canvas.height) + 50;
      if (canvasSize < 500) {
        canvasSize = 500;
      }
      canvas.width = canvasSize;
      canvas.height = canvasSize;

      // Resize the modal container
      let modal = document.querySelector("#result-modal .modal-dialog");
      modal.style.maxWidth = `${canvasSize}px`;
      modal.style.width = `${canvasSize}px`;
    }

    // Clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Calculate the coordinates of the rectangle's points
    let x1 = canvas.width / 2 - length / 2;
    let y1 = canvas.height / 2 - width / 2;
    let x2 = canvas.width / 2 + length / 2;
    let y2 = canvas.height / 2 - width / 2;
    let x3 = canvas.width / 2 + length / 2;
    let y3 = canvas.height / 2 + width / 2;
    let x4 = canvas.width / 2 - length / 2;
    let y4 = canvas.height / 2 + width / 2;

    ctx.beginPath();
    ctx.moveTo(x1, y1);
    ctx.lineTo(x2, y2);
    ctx.lineTo(x3, y3);
    ctx.lineTo(x4, y4);
    ctx.closePath();
    ctx.stroke();
  }

  // Back button handle
  $(".backtotype").click(function () {
    resetPopups();
    $("#calc-type").modal("show");
  });

  // Reset popups
  function resetPopups() {
    $("#calc-type").modal("hide");
    $("#result-modal").modal("hide");
    $("#circle-modal").modal("hide");
    $("#triangle-modal").modal("hide");
    $("#rectangle-modal").modal("hide");
  }
});

// Reset canvas
function resetCanvas() {
  let canvas = document.querySelector(".diagram");
  let modal = document.querySelector("#result-modal .modal-dialog");

  // Reset canvas size
  canvas.width = 0;
  canvas.height = 0;
}
