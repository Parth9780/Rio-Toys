<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contact h1{
            style="font-size:70px; 
            padding: 0px 25px
        }
        ol li img{
            /* width:50px; */
        }
        li span{
            padding: 20px;
        }
        li span img{
            width:50px;
            border:2px solid;
            border-radius: 50%;
            background-color: white;
        }
        /* .get-in-tuch ul li{
            text-align: left;
        }
        ul li input, button{
            width: 80%;
            height: 50px;
            padding:10px 5px;
            text-align:left;
        }
        textarea{
            width: 80%;
            padding:10px 5px;
            text-align:left;
            max-height: 100px;
        } */
        #frmContactus {
            width:70%;
            margin-left:30%;
            margin-top:10%;
        }
        .contact-form h2{
            width:60%
        }
        h2{
            color: #080875;
        }
        input{
            height: 50px;
        }
        button{
            font-size: 22px;
            width: 25%;
            margin-top:10px;
            float: left;

        }
    </style>
</head>
<body>
    
<form action="" method="post"></form>
    <div id="Contact_Us" style="position: absolute; background-color: #fbebec; width: 100%; height: 100%; ">
        <div class="contact" style="width:100%; text-align:center; padding: 10px; padding: 15px;">
            <h1 style="font-size:70px; padding: 0px 25px">Contact Us</h1>
        </div>
        <div class="part2" style="position: absolute; background-color:#fbf5f5; width: 60%; height: 80%; margin-left: 30%;">
            <form method="post" id="frmContactus">
					<div class="contact-form">
                        <h2>Get In Tuch</h2>
					<div class="form-group">
						<label class="control-label col-sm-2" for="name"></label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email"></label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="mobile"></label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" required>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2" for="comment"></label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="5" id="comment" name="massage"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-outline-danger" name="submit" id="submit">Submit</button>
                            <span style="color:red;"><?php echo $msg?></span>
							<span style="color:red;" id="msg"></span>
						</div>
					</div>
				</div>
			</form>
        </div>
        <div class="part1" style="position: absolute; background-color:#d54444; width: 30%; height: 70%; margin-left: 15%; margin-top: 2.5%;">
            <div class="contact-us" style="  width: 80%; margin: auto; margin-top: 10%; padding: 10px;">
                <h2 style="text-align: left; color: white;">Contact Us</h2>
                <ol style="list-style: none; text-decoration: none; padding: 10px;">
                    <li style="text-align: justify; font-size: 21px; color: white; padding: 20px 0px;"><span><img src="http://cdn.onlinewebfonts.com/svg/img_358935.png" alt="" ></span>Rajkot Gondal Highway, At. Hadamtala, Rajkot-360 030(Gujarat)</li>
                    <li style="text-align: justify; font-size: 21px; color: white; padding: 20px 0px;"><span><img src="https://tse4.mm.bing.net/th?id=OIP.SmU8sSNREMl-gnrlPBq-TAHaHb&pid=Api&P=0&h=180" alt=""></span>riotoys4kids@gmail.com</li>
                    <li style="text-align: justify; font-size: 21px; color: white; padding: 20px 0px;"><span><img src="https://tse2.mm.bing.net/th?id=OIP.I9ILOU9MvDd171cTLQ0ppAHaHa&pid=Api&P=0&h=180" alt=""></span>+91 95865 00652</li>
                    <li style="text-align: justify; font-size: 21px; color: white; padding: 20px 0px;"><span><img src="https://tse3.mm.bing.net/th?id=OIP.JAB9nIoIrXh8bbfy69tGEwHaHa&pid=Api&P=0&h=180" alt=""></span>+91 94084 98686</li>
                </ol>
            </div>
        </div>
    </div>

</form>
</body>
</html>