<style>
	.container {
		width: 70%;
		height: 300px;
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

	/* choose work start */
	.container2 {
		background-color: #b1bfbd91;
		width: 50%;
		height: auto;
		margin-top: 5%;
		border-radius: 10px;
		border: 2px solid #88888875;
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto;
	}

	.row2 {
		display: grid;
		margin-right: -15px;
		margin-left: -15px;
		justify-items: start;
		justify-content: space-around;
		margin-top: 10%;
	}

	.container2 li {
		font-size: larger;
		color: black;
	}

	@media screen and (max-width: 770px) {}

	@media screen and (max-width: 770px) {
		.container {
			width: auto;
			height: 400px;
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

		/* choose_work start */
		.container2 {
			margin-top: 15%;
			padding: 15% 0;
			width: 95%;
			height: auto;
		}

		.container2 li {
			padding: 15px 0;
		}
	}
</style>
<div id="content" class="p-4 p-md-5">
	<h2 class="mb-4 ">Select Client: </h2>
	<div class="container">
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
			<button class="btn btn-success" id="submit">Submit</button>
		</div>
	</div>
	<!-- choose work -->
	<div id="work" style="display: none;">
		<h3 class="mb-4 heading">Choose Work :</h3>
		<div class="container2">
			<div class="row2">
				<li class="p-md-5" for="">Add Amount: <a href="<?= base_url('accountc/add_bill')?>" class="btn btn-primary">Open</a></li>
				<li class="p-md-5" for="">List: <a href="" class="btn btn-primary">Open</a></li>
				<li class="p-md-5" for="">Add Amount: <a href="" class="btn btn-primary">Open</a></li>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	var $jq = jQuery.noConflict();
	function select_dealer(area) {
		var myurl = "<?= base_url('accountc/get_dealer/') ?>" + area;
		// console.log(area);
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

<!-- choose work -->

<script>
	var $jq = jQuery.noConflict();

    $jq('#submit').on("click", function (e) {
		e.preventDefault();
		var area = $jq('#area').val();
        var dealer = $jq('#dealer').val();
        if (area && dealer) {

        $jq('#work').css("display", "block"); 
        $jq('.heading').css("margin-top", "10%"); 

        var data = {
            area: area,
            dealer: dealer
        };

        var myurl = "<?= base_url('accountc/open_list') ?>"; 
		console.log(myurl);
        $jq.ajax({
            type: "POST", 
            url: myurl,
            data: data,
            success: function (response) {
                console.log("AJAX request successful.");
                console.log(response); 
            },
            error: function (error) {
                console.error("AJAX request failed:", error);
            }
        });
	} else {
            if (!area) {
                $jq('#area').focus(); 
                alert("Please select an area.");
            } else if (!dealer) {
                $jq('#dealer').focus(); 
                alert("Please select a dealer.");
            }
        }
    });
</script>
