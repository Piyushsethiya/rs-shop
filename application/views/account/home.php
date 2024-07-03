<style>
	.container {
		width: 70%;
		height: 40%;
		margin-top: 5%;
		background-color: #b1bfbd91;
		border-radius: 10px;
		border: 2px solid #88888875;
	}

	.container select {
		margin-top: 20px;
		width: 100%;
		font-size: 21px;
		padding-left: 10px;

	}

	.container select option {
		font-size: 15px;
	}

	.container button {
		margin-right: 100px;
	}

	.btn {
		float: inline-end;
	}

	@media screen and (max-width: 770px) {
		.container {
			width: auto;
			height: 60%;
			margin-top: 25%;
		}

		.row {
			display: grid;
			margin-right: -100px;
			margin-left: -100px;
			margin-top: 30%;
			justify-items: center;
		}

		.container button {
			margin-right: auto;
			margin-top: 15px;
		}
	}
</style>
<div id="content" class="p-4 p-md-5">
	<h2 class="mb-4">Select Client: </h2>
	<div class="container">
		<form action="<?= base_url('accountc/open_list') ?>" method="POST">
			<div class="row">
				<div class="col-6">
					<h4 class="p-md-5">Area <span style="color: red">*</span><br>
						<select onchange="select_dealer(this.value)" name="area" id="area" required>
							<option value="">Select</option>
							<?php foreach ($area as $data) { ?>
								<option value="<?= $data['area'] ?>"><?= $data['area'] ?></option>
							<?php } ?>
						</select>
					</h4>
				</div>
				<div class="col-6">
					<h4 class="p-md-5">Dealer <span style="color:red">*</span><br>
						<select name="dealer" id="dealer" required>
							<option value="">Select</option>
						</select>
					</h4>
				</div>
			</div>
			<div class="btn">
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</form>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	var $jq = jQuery.noConflict();
	function select_dealer(area) {
		var myurl = "<?= base_url('accountc/get_dealer/') ?>" + area;
		console.log(myurl);
		if (area != "") {
			$jq.ajax({
				url: myurl,
				success: function (data) {
					$jq(dealer).html(data);
				},
			});
		}
	}
</script>
