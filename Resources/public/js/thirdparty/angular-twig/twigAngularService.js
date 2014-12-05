/**
 * Created by James jin on 12/09/14.
 */

"use strict";

var serviceData= angular.module('serviceData', []).config(function($interpolateProvider){
        $interpolateProvider.startSymbol('<%=').endSymbol('%>');
    }
);