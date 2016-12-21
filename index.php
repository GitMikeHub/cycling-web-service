<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="strrevApp">
    <head>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet" type="text/css"/>
        <title>Michael Coleman's super cool string reversal app</title>
    </head>
    <body ng-controller="StrrevCtrl">        
        <div id='container'>
            <h1>Michael Coleman's super cool string reversal app</h1>
            <h2>Enter String:</h2>
            <div>
                <input placeholder="Enter String" data-ng-model="curSubmission">

                <br/>
                <button type="button" data-ng-click="sendInfo()" data-ng-disabled="curSubmission.length < 1">Submit</button>
            </div>

            <div ng-hide="submissions.length === 0">
            <mytitle msg="'Submissions'"></mytitle>
            <button type="button" data-ng-click="clearInfo()">Clear</button>
            <submissions></submissions>
            </div>
        </div>
        <script src="node_modules/angular/angular.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>
