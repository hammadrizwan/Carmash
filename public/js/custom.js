$(document).ready(function() {
  // simple example, using all default options unless overridden globally
 
    
     $('div.expandable p').expander({
    slicePoint:       100,  // default is 100
    expandPrefix:     ' ', // default is '... '
    expandText:       '<button type="button">Read More!</button>', // default is 'read more'
    collapseTimer:    5000, // re-collapses after 5 seconds; default is 0, so no re-collapsing
    userCollapseText: '<button type="button">Read Less!</button>'  // default is 'read less'
  });
});