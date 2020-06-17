<style type="text/css">
	* {
  margin: 0px;
  padding: 0px;
  outline: none;
}
	.ms-container {
  background: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

select#my-select.form-control(multiple="multiple")
  - var values = ['Broccoli', 'Corn', 'Cucumber', 'Tomato', 'Mushroom', 'Garlic', 'Onion', 'Brinjal'];
    each val in values.length ? values : ['There are no values']
      option= val

<script type="text/javascript">
	// Material Select Initialization
$('#my-select').multiSelect();
</script>

