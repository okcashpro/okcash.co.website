<?php 
$totalcoins = file_get_contents("stats/totalcoins.txt");
$totady = file_get_contents("stats/totady.txt");
$nonady = file_get_contents("stats/nonady.txt");
$marketplace = file_get_contents("stats/marketplace.txt");
$marketcap = file_get_contents("stats/marketcap.txt");
?>

<!DOCTYPE html>
<html lang="eng" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="OK">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Okcash is a positive innovation multi payment system, a new kind of digital money that's instant, multi chain, energy friendly, and free from bank fees.">
	<meta property="og:image" content="https://okcash.co/images/okcash-ok.png">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="900">
	<meta property="og:image:width" content="900">
	<meta property="og:image:height" content="450">
	<meta property="og:type" content="website" />
    <meta property="og:url" content="https://okcash.co/"/>
    <meta property="og:title" content="Okcash • The leading multi chain energy friendly and open source electronic cash" />
    <meta property="og:description" content="Okcash is a positive innovation multi payment system, a new kind of digital money that's instant, multi chain, energy friendly, and free from bank fees." />
	<link rel="shortcut icon" href="images/favicon.png">
	<title>Okcash • The leading multi chain energy friendly and open source electronic cash</title>
	<link rel="stylesheet" href="assets/css/main.bundle.css">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/theme.css">
	<!-- Global site tag (gtag.js) - -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140324215-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140324215-1');
</script>

</head>

<body class="theme-dark is-smooth-effect" data-spy="scroll" data-target="#mainnav" data-offset="80">
<style>
del { 
  text-decoration: line-through;
}
</style>


	<!-- Header --> 
	<header class="site-header is-sticky">

		<!-- Place Particle Js -->
		<!-- <div id="particles-js" class="particles-container particles-js"></div> -->

		<!-- Navbar -->
		<div class="navbar navbar-expand-lg is-transparent" id="mainnav">
			<nav class="container">
				<a class="navbar-brand animated" data-animate="fadeInDown" data-delay=".65" href="./">
					<img class="logo logo-light" alt="Okcash" src="images/logo-white.png">
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
					<span class="navbar-toggler-icon">
						<span class="ti ti-align-justify"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarToggle">
					<ul class="navbar-nav animated" data-animate="fadeInDown" data-delay=".9">
						<li class="nav-item"><a class="nav-link menu-link" href="#what-is-okcash">What is Okcash<span class="sr-only">(current)</span></a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#opensource">OS</a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#roadmap">Roadmap</a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#exchanges">Exchanges</a></li>
						<li class="nav-item"><a class="nav-link menu-link" href="#participate">OK Heroes</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">MORE</a>
							<div class="dropdown-menu">
								<a class="dropdown-item menu-link" href="#worldwide">OK Network</a>
								<a class="dropdown-item menu-link" href="#stats">More Info</a>
								<a class="dropdown-item menu-link" href="#supporters">Supporters</a>
								<a class="dropdown-item menu-link" href="#faq">Frequently AQ</a>
								<a class="dropdown-item menu-link" href="#ok-voluntaries">OK volunteers</a>
								<a class="dropdown-item menu-link" href="#sharing">Sharing is caring</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav navbar-btns animated" data-animate="fadeInDown" data-delay="1.15">
						<li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="#apps">Download OK</a></li>
						<li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="https://oktoken.cash" target="_blank">Swap OK Multi chain</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- End Navbar -->

		<!-- Banner/Slider -->
		<div id="header" class="banner banner-curb banner-particle d-flex align-items-center">
			<div class="container">
				<div class="banner-content">
					<div class="row align-items-center mobile-center">
						<div class="col-lg-6 col-md-12 order-lg-first">
							<div class="header-txt">
								<h1 class="animated" data-animate="fadeInUp" data-delay="1.55">OK • Multi chain energy friendly open source electronic cash </h1>
								<p class="lead color-secondary animated" data-animate="fadeInUp" data-delay="1.65">Micro Transactions • Speed • Efficiency • Security<br/>Decentralize Everything and Empower Everyone</p>
								<ul class="btns animated" data-animate="fadeInUp" data-delay="1.75">
									<li><a href="https://chainz.cryptoid.info/ok/" target="_blank" class="btn btn-alt">OK [native] Explorer</a></li>
									<li><a href="https://bscscan.com/token/0x523821d20a283d955f6205b4c9252779cd0f964b" target="_blank" class="btn btn-alt">OK [BEP20] BSC Explorer</a></li>
									<li><a href="https://etherscan.io/token/0xd3Ac016b1B8C80EeAdDe4D186A9138C9324e4189" target="_blank" class="btn btn-alt">OK [ERC20] ETH Explorer</a></li>
									<li><a href="https://snowtrace.io/token/0xd3Ac016b1B8C80EeAdDe4D186A9138C9324e4189" target="_blank" class="btn btn-alt">OK [AVAX] Avalanche Explorer</a></li>
									<li><a href="https://polygonscan.com/token/0xd3Ac016b1B8C80EeAdDe4D186A9138C9324e4189" target="_blank" class="btn btn-alt">OK [MATIC] Polygon Explorer</a></li>
								</ul>
								<ul class="social">
									<li class="animated" data-animate="fadeInUp" data-delay="1.8"><a href="https://discord.io/cryptocurrency" target="_blank"><em class="fab fa-discord"></em></a></li>
									<li class="animated" data-animate="fadeInUp" data-delay="1.85"><a href="https://t.me/okcash" target="_blank"><em class="fab fa-telegram"></em></a></li>
									<li class="animated" data-animate="fadeInUp" data-delay="1.9"><a href="https://twitter.com/search?q=okcash" target="_blank"><em class="fab fa-twitter"></em></a></li>
									<li class="animated" data-animate="fadeInUp" data-delay="1.95"><a href="https://www.reddit.com/r/OKcash/" target="_blank"><em class="fab fa-reddit"></em></a></li>
									<li class="animated" data-animate="fadeInUp" data-delay="2"><a href="https://github.com/okcashpro/okcash" target="_blank"><em class="fab fa-github"></em></a></li>
									<li class="animated" data-animate="fadeInUp" data-delay="2.05"><a href="https://bitcointalk.org/index.php?topic=1028368.0" target="_blank"><em class="fab fa-bitcoin"></em></a></li>
									<li class="animated" data-animate="fadeInUp" data-delay="2.15"><a href="https://okcash.news" target="_blank"><em class="fab fa-medium-m"></em></a></li>
								</ul>
							</div>
						</div><!-- .col  -->
						<div class="col-lg-6 col-md-12 order-first">
							<div class="header-image animated" data-animate="fadeInRight" data-delay="1.25">
								<img src="images/header-ok-btc-network.png" alt="header">
								<!-- <img class="header-image-icon left-icon" src="images/okcash-icon-a.png" alt="header-icon">
								<img class="header-image-icon right-icon" src="images/bitcoin-icon-b.png" alt="header-icon"> -->
							</div>
						</div><!-- .col  -->
					</div><!-- .row  -->
				</div><!-- .banner-content  -->
			</div><!-- .container  -->
		</div>
		<!-- End Banner/Slider -->
	</header>
	<!-- End Header -->

	<!-- Start Section -->
	<div class="section section-pad section-bg-blend nopb" id="what-is-okcash">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-5">
					<div class="res-m-btm animated" data-animate="fadeInUp" data-delay=".1">
						<img src="images/okcash-a.png" alt="graph">
					</div>
				</div><!-- .col  -->
				<div class="col-md-6 offset-md-1">
					<div class="text-block">
						<h4 class="animated" data-animate="fadeInUp" data-delay="0">What is Okcash?</h4>
						<p class="lead animated" data-animate="fadeInUp" data-delay=".1">OK is a hybrid and multi chain cryptocurrency that evolved into a full Proof of Stake (PoS) blockchain. </br>[World wide, Efficient &amp; Energy Friendly]</p>
						<p class="animated" data-animate="fadeInUp" data-delay=".2"> OK is simple to use, efficient and sustainable, it boasts of a confirmation rate higher than most cryptocurrencies, fast speeds, low fees, long term sustainable staking [With LTSSposv3hybrid system, Okcash reaches full predictability and it becomes like mining on Bitcoin (each block holds a semi-static reward, increasing even further the fairness and security of the chain over any actual PoS system)], and is also ready for the Internet of Things (IoT) and every OS Platform.</p>
						<p class="animated" data-animate="fadeInUp" data-delay=".3">Okcash is a decentralized and fast growing  cryptocurrency / movement that was born on Nov 24th 2014. OK was mined (PoW-Scrypt) and evolved to be stake-able (PoS-LTSS-Sha256). Okcash is not a security, it never had an ICO, nor any kind of funding rounds. OK is self sustainable and is fully supported by volunteers (Just like Bitcoin).</p>
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->
		</div><!-- .container  -->
	</div>
	<!-- Start Section -->

	<!-- Start Section -->
	<div class="section section-pad no-pb section-bg-alt">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-5 offset-md-1">
					<div class="res-m-btm animated" data-animate="fadeInUp" data-delay=".1">
						<img src="images/okcash-b.png" alt="graph">
					</div>
				</div><!-- .col  -->
				<div class="col-md-6 order-md-first order-last">
					<div class="text-block">
						<h2 class="animated" data-animate="fadeInUp" data-delay="0">Okcash • OK</h2>
						<p class="lead animated" data-animate="fadeInUp" data-delay=".1"><b>OK</b> is the market symbol and short name for <b>Okcash</b>.</br>The OK network is decentralized and Always Available World Wide. OK is open-source and multi chain; its design is public, nobody owns or controls Okcash and everyone can take part.</p>
						<a href="https://www.youtube.com/watch?v=zw7_smZ1P0Y" class="play-btn video-play animated" data-animate="fadeInUp" data-delay=".2">
							<em class="play"><span></span></em>
							<span>Everything is gonna be <b>OK</b></span>
							<span>Watch the Video</span>
						</a>
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->
		</div><!-- .conatiner  -->
	</div>
	<!-- Start Section -->





	<!-- Start Section -->
	<div class="section section-pad section-bg-btoa" id="apps">
		<div class="container">

			<div class="row text-center">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="section-head">
						<div class="heading-animation">
							<span class="line-1"></span><span class="line-2"></span>
							<span class="line-3"></span><span class="line-4"></span>
							<span class="line-5"></span><span class="line-6"></span>
							<span class="line-7"></span><span class="line-8"></span>
						</div>
						<h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">The OK Wallet 
							<span>Okcash</span>
						</h2>
						<p class="animated" data-animate="fadeInUp" data-delay=".1">Your OK wallet is the software you use to send, receive and store your OK. 
						It’s simple to use and you can choose to send and receive OK payments from your own OK wallet.</p>
						<a href="https://okcash.org/#jf_download" class="btn btn-sm" target="_blank">Download the OK Wallet from Okcash.org</a>
					</div>
				</div>
			</div>

			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="res-m-btm animated" data-animate="fadeInUp" data-delay=".1">
						<img src="images/ok-wallet.png" alt="graph">
					</div>
				</div><!-- .col  -->

				<div class="col-md-5 offset-md-1">
					<div class="text-block">
						
						<p class="animated" data-animate="fadeInUp" data-delay="0">The main mission of the Okcash project is to empower its users while being multi chain, energy friendly and sustainable, evolve with positive innovations, and decentralization to give the power to the user and help advance crypto forward. <br/>The OK movement mission is to help change the world with positive innovation. <br/>These are some of the benefits of start using Okcash:</p>
						<ul class="animated" data-animate="fadeInUp" data-delay=".1">
							<li>Multiplatform. [Windows, Mac, Linux, Android, IoT devices]</li>
							<li>Multi chain. [OK Network, Ethereum, Binance Smart Chain, Polygon, Avalanche]</li>
							<li>100% upload time + Decentralized.</li>
							<li>The most sustainable, efficient and secure Proof of Stake.</br> [LTSS | Inhouse]</li>
							<li>Security + Efficiency. [8+ years tested chain]</li>
							<li>Available world wide. [Network running 24/7]</li>
							<li>Fast transaction Speeds. [Less than 72 seconds]</li>
							<li>Lowest Fees. [ 0.0001 OK = 0.000005 USD aprox*] </li>
							<li>Constantly growing community, apps, dapps and networks.</li>
						</ul>
						
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->

		</div><!-- .container  -->
	</div>
	<!-- Start Section --> 


	<!-- Start Section -->
	<div class="section section-pad section-bg-alt" id="opensource">
		<div class="container">

			<div class="row text-center">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="section-head">
						<h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">Open Source
							<span>OK</span>
						</h2>
						<p class="animated" data-animate="fadeInUp" data-delay=".1"><b>OK</b> is open-source and multi chain; its design is public, nobody owns</br> or controls Okcash and everyone can take part.</br><b>OK</b> is free software and any developer can join and contribute to the project. Everything you need is in the <a href="https://github.com/okcashpro/" target="_blank">GitHub repositories</a>.</p>
					</div>
				</div>
			</div>


			<div class="row align-items-center">
				<div class="col-lg-6 res-m-bttm">
					<div class="row event-info">
						<div class="col-sm-6">
							<div class="event-single-info animated" data-animate="fadeInUp" data-delay="0">
								<h6>Born</h6>
								<p>Nov 24, 2014 (PoW-PoS)</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info animated" data-animate="fadeInUp" data-delay=".1">
								<h6>Average Block Time</h6>
								<p>72 seconds</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info animated" data-animate="fadeInUp" data-delay=".2">
								<h6>Algo</h6>
								<p>Sha256</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info animated" data-animate="fadeInUp" data-delay=".3">
								<h6>Sending Fees</h6>
								<p>0.0001 OK</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info animated" data-animate="fadeInUp" data-delay=".4">
								<h6>Current Consensus</h6>
								<p>Proof of Stake LTSS</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info animated" data-animate="fadeInUp" data-delay=".5">
								<h6>Current LTSS POS Block Reward</h6>
								<p>3.9+ OK coins / Block Reward</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info animated" data-animate="fadeInUp" data-delay=".4">
								<h6>Current Coin Cap</h6>
								<p><?=number_format($totalcoins, 2);?> OK</p>
							</div>
						</div><!-- .col  -->
						<div class="col-sm-6">
							<div class="event-single-info animated" data-animate="fadeInUp" data-delay=".5">
								<h6>Max Coin Cap</h6>
								<p>105,000,000 OK </br>(5 times Bitcoin max cap)</p>
							</div>
						</div><!-- .col  -->
					</div><!-- .row  -->
				</div><!-- .col  -->
				<div class="col-lg-5 offset-lg-1">
					<div class="countdown-box text-center animated" data-animate="fadeInUp" data-delay=".3">
						<p>Aprox. ETA for next <a href="https://okcashblockhalf.com" target="_blank">POS LTTS Reward-Change</a></p>
						<div class="token-countdown d-flex align-content-stretch" data-date="2025/02/12"></div>
						<a href="https://github.com/okcashpro/okcash" target="_blank" class="btn btn-alt btn-sm">Join &amp; contribute to the OK Development</a>
						<ul class="icon-list">
							 
							<li><em class="fas fa-handshake"></em></li> 
							<li><em class="fab fa-github"></em></li>
							<li><em class="fas fa-star"></em></li> 
						</ul>
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->

			<div class="gaps size-3x" id="worldwide"></div><div class="gaps size-3x d-none d-md-block"></div><!-- .gaps  -->
            <br/>
			<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>☆ OK Network ☆</h2>
							Worldwide Stats
						</div>
						<br/><br/><br/>
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
												
						<!-- first count item -->
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
							<div class="counters-item">
								<i class="fas fa-qrcode fa-3x"></i>

								<br/><br/><h2><?=number_format($totady, 0);?></h2>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>OK Addresses created so far</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fas fa-trophy fa-3x"></i>

								<br/><br/><h2><?=number_format($nonady, 0);?></h2>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Holders in OK core Network</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fas fa-rocket fa-3x"></i>

								<br/><br/><h2><?=number_format($marketplace, 0);?></h2>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p> CoinCap Rank</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
							<div class="counters-item">
								<i class="fas fa-star fa-3x"></i>

								<br/><br/><h2>$ <?=number_format($marketcap, 2);?></h2>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Market Cap (USD)</p>
							</div>
						</div>
						<!-- end first count item -->
					</div>
					

				</div>
			</div>
		

		</div><!-- .container  -->
	</div>
	<!-- Start Section -->


	<!-- Start Section -->
	<div class="section section-pad section-bg section-connect" id="roadmap">
		<div class="container">

			<div class="row text-center">
				<div class="col">
					<div class="section-head">
						<h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">Roadmap
							<span>Community</span>
						</h2><p align="center">With OK being decentralized, it is difficult to provide a full roadmap that covers all coming developments.</br> 
						There are many different teams and individuals indepently working on their own projects utilizing OK or to help improve OK.</br> 
						In the roadmap below we can find some of the OK goals and upcoming features by different teams. </br>
						This is not fully inclusive of all milestones and upcoming features. New services and features may be integrated at any time based on community consensus, or by different users or teams without prior announcement. <br/>
						Keep up with the updates at: <a href="https://okcash.news" target="_blank">Okcash.news</a> or join the OK community over: <a href="https://discord.io/cryptocurrency" target="_blank"> discord.io/cryptocurrency </a><br/>
						To join or contribute with the project development, send an email to: <a href="mailto:devteam@okcash.co">devteam@okcash.co</a><br/>
						[New Roadmaps gets shared after all new items on the actual roadmap are checked (delivered)]
						</p>
					</div>
				</div>
			</div>
			
			<div class="row roadmap-list align-items-end animated" data-animate="fadeInUp" data-delay="0">
				<div class="col-lg">
					<div class="single-roadmap roadmap-sm roadmap-done">
						<h6> </h6>
						<p>• <del>OK core performance & security update </del><br/>• <del>Resources update</del></p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg width-0">
					<div class="single-roadmap roadmap-down roadmap-done">
						<h6> </h6>
						<p>• <del>OK core bip updt  </del><br/>• OK electrum client <br/>• <del>Resources update </del><br/>• <del>New Resources for services</del></p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg">
					<div class="single-roadmap roadmap-lg roadmap-done">
						<h6> </h6>
						<p>• <del>7th OK Birthday </del><br/>• <del>ROKOS 10 release </del><br/>• <del>OK dev [Open source devs community for Okcash]</del> <br/>• <del>OK core design upgrade</del></p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg width-0">
					<div class="single-roadmap roadmap-down roadmap-done">
						<h6> </h6>
						<p>• <del>OK network health nodes map </del><br/>• <del>OK web staking wallet</del> <br/>• <del>OK mobile staking wallet </del><br/>• <del>OK core upgrade </del><br/>• Okcash wiki </p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg">
					<div class="single-roadmap roadmap-sm roadmap-done">
						<h6> </h6>
						<p>• <del>Ledger Integration</del> <br/>• <del>TrustWallet Integration</del> <br/>• <del>OK block reward halving</del> <br/>• OK self governance system [close test] <br/>• Decentralized / uncensorable OK website [UD + IPFS]</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg width-0">
					<div class="single-roadmap roadmap-down">
						<h6> </h6>
						<p>• ROKOS 11 release <br/>• ROKOS + smart contracts [Release + giveaway to OK holders] <br/>• <del>OK core upgrade </del><br/>• OK self governance system [open test] </p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg">
					<div class="single-roadmap roadmap-lg">
						<h6> </h6>
						<p>• <del>8th OK Birthday</del> <br/>• ROKOS + smart contracts [release + giveaway to OK holders] <br/>• OK core upgrade</p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg width-0">
					<div class="single-roadmap roadmap-down">
						<h6> </h6>
						<p><br/>• <del>Okcash DEFI Bridge </del><br/>• Okcash Wrapped [Ethereum] <br/>• <del>Okcash Wrapped [Binance] </del><br/>• OK NFTs </p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg">
					<div class="single-roadmap roadmap-sm">
						<h6> </h6>
						<p>• ROKOS 12 release <br/>• OK core upgrade <br/>• OK game multi platform [closed test] </p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg width-0">
					<div class="single-roadmap roadmap-down">
						<h6> </h6>
						<p>• Okcash Wrapped [Polygon] <br/>• Okcash Wrapped [Avalanche] <br/>• OK [earn] Games </p>
					</div>
				</div><!-- .col  -->
				<div class="col-lg">
					<div class="single-roadmap roadmap-lg">
						<h6> </h6>
						<p>• 9th OK Birthday <br/>• OK web3 <br/>• OK core upgrade <br/>• ROKOS 13 release </p>• OK [NFT] p2e Games
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->
			<br/><br/><br/><br/>
		</div><!-- .container  -->
	</div>
	<!-- Start Section -->


	<!-- Start Section -->
	<div class="section section-pad no-pb section-bg-alt section-fix" id="supporters">
		<div class="container">

			<div class="row text-center">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="section-head">
						<h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">OK Supporters
							<span>Okcash</span>
						</h2>
						<p class="animated" data-animate="fadeInUp" data-delay="0.1">OK is fully supported by volunteers, different businesses, services, communities, groups and individuals world wide and anyone can join.<br/> 
						Here are some out of many.</p>
					</div>
				</div>
			</div>

			<div class="row text-center">

				<div class="col-md-6 col-lg-3">
					<div class="team-circle animated" data-animate="fadeInUp" data-delay=".2">
						<div class="team-photo">
							<a href="https://okdevs.org" target="_blank"><img src="images/okdevs.jpg" alt="okdevs" />
							</a>
						</div>
						<div class="team-info">
							<h5 class="team-name">OK Devs</h5>
							<span class="team-title">Open Source Developers Group </span>
							
						</div>
					</div>
				</div><!-- .col  -->

				<div class="col-md-6 col-lg-3">
					<div class="team-circle animated" data-animate="fadeInUp" data-delay=".4">
						<div class="team-photo">
							<a href="https://azure.microsoft.com/en-au/blog/azure-blockchain-update-8/" target="_blank"><img src="images/azure.jpg" alt="azure">
							</a>
						</div>
						<div class="team-info">
							<h5 class="team-name">Microsoft Azure</h5>
							<span class="team-title">Azure Blockchain as a Service (BaaS)</span>
							
						</div>
					</div>
				</div><!-- .col  -->

				<div class="col-md-6 col-lg-3">
					<div class="team-circle animated" data-animate="fadeInUp" data-delay=".2">
						<div class="team-photo">
							<a href="https://bitcoinfullnode.org/" target="_blank"><img src="images/bitcoinfullnode.jpg" alt="bitcoinfullnode" />
							</a>
						</div>
						<div class="team-info">
							<h5 class="team-name">ROKOS Bitcoin Fullnode</h5>
							<span class="team-title">1st Crypto OS for IoT with OK wallets</span>
						</div>
					</div>
				</div><!-- .col  -->

				<div class="col-md-6 col-lg-3">
					<div class="team-circle animated" data-animate="fadeInUp" data-delay=".4">
						<div class="team-photo">
							<a href="https://cointopay.com/" target="_blank"><img src="images/cointopay.jpg" alt="cointopay">
							</a>
						</div>
						<div class="team-info">
							<h5 class="team-name">Coin to Pay</h5>
							<span class="team-title">CryptoBanking OK payments processor</span>
							
						</div>
					</div>
				</div><!-- .col  -->

			</div><!-- .row  -->
			
			<div class="row text-center">


				<div class="col-md-6 col-lg-3">
					<div class="team-circle animated" data-animate="fadeInUp" data-delay=".2">
						<div class="team-photo">
							<a href="https://cryptocurrencycheckout.com/coin/okcash" target="_blank"><img src="images/cccheckout.jpg" alt="cccheckout" />
							</a>
						</div>
						<div class="team-info">
							<h5 class="team-name">Cryptocurrency Checkout</h5>
							<span class="team-title">OK Payments and Merchant tools</span>
							
						</div>

						
					</div>
				</div><!-- .col  -->


				<div class="col-md-6 col-lg-3">
					<div class="team-circle animated" data-animate="fadeInUp" data-delay=".5">
						<div class="team-photo">
							<a href="https://www.mycointainer.com/assets/okcash/" target="_blank"><img src="images/mycointainer.jpg" alt="mycointainer">
							</a>
						</div>
						<div class="team-info">
							<h5 class="team-name">My Cointainer</h5>
							<span class="team-title">Mobile OK Staking wallets</span>
							
						</div>
					</div>
				</div><!-- .col  -->
			</div><!-- .row  -->
			
			<div class="row text-center">



			</div><!-- .row  -->
			
            <div class="row text-center">



			</div><!-- .row  -->
			
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="gaps size-2x"></div>
					<h3 class="sub-heading ucap">Communities</h3>
					<div class="gaps size-2x"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="row text-center">

						<div class="col-lg-4 col-md-6">
							<div class="team-circle animated" data-animate="fadeInUp" data-delay=".1">
								<div class="team-photo">
									<a href="https://bitcointalk.org/index.php?topic=1028368.0" target="_blank"><img src="images/bitcointalk.jpg" alt="bitcointalk">
									</a>
								</div>
								<div class="team-info">
									<h5 class="team-name">Bitcointalk</h5>
									<span class="team-title">First Bitcoin forums</span>
								</div>

								

							</div>
						</div><!-- .col  -->

						<div class="col-lg-4 col-md-6">
							<div class="team-circle animated" data-animate="fadeInUp" data-delay=".2">
								<div class="team-photo">
									<a href="https://discord.io/cryptocurrency" target="_blank"><img src="images/discord.jpg" alt="discord">
									</a>
								</div>
								<div class="team-info">
									<h5 class="team-name">Discord</h5>
									<span class="team-title">OK Bitcoin - Crypto and Blockchain</span>
								</div>

								
							</div>
						</div><!-- .col  -->

						<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 animated" data-animate="fadeInUp" data-delay=".3">
							<div class="team-circle">
								<div class="team-photo">
									<a href="https://okcashtalk.org" target="_blank"><img src="images/okcashtalk.jpg" alt="okcashtalk">
									</a>
								</div>
								<div class="team-info">
									<h5 class="team-name">Okcashtalk</h5>
									<span class="team-title">First Okcash forums</span>
								</div>

								

							</div>
						</div><!-- .col  -->
						
					</div><!-- .row  -->
				</div><!-- .col  -->
			</div><!-- .row  -->
		</div>
	</div>
	<!-- Start Section -->

	<!-- Start Section -->
	<div class="section section-pad section-bg-alt" id="exchanges">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<div class="section-head">
						<h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">OK Exchanges
							<span>Exchanges</span>
						</h2>
					</div>
				</div>
			</div>
			
			<div class="partner-list">
				<div class="row text-center">
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay="0">
							<a href="https://global.bittrex.com/trade/ok-btc" target="_blank"><img src="images/bittrex.png" alt="Bittrex"></a>
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".1">
							<a href="https://app.uniswap.org/#/swap?outputCurrency=0xd3Ac016b1B8C80EeAdDe4D186A9138C9324e4189&inputCurrency=0xA0b86991c6218b36c1d19D4a2e9Eb0cE3606eB48" target="_blank"><img src="images/uniswap.png" alt="Uniswap"></a>
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".2">
							<a href="https://pancakeswap.finance/swap?outputCurrency=0x523821d20a283d955f6205B4C9252779Cd0f964B&inputCurrency=0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56" target="_blank"><img src="images/pancakeswap.png" alt="PancakeSwap"></a>
						</div>
					</div>
				</div>
				
				<div class="row text-center">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-sm">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".3">
								<a href="https://www.sushi.com/swap" target="_blank"><img src="images/sushiswap.png" alt="SushiSwap"></a>
								</div>
							</div>
							<div class="col-sm">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".4">
								<a href="https://kyberswap.com/swap/avalanche/usdc-to-ok" target="_blank"><img src="images/kyberswap.png" alt="KyberSwap"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br/>
			
			
			<div class="partner-list">
				<div class="row text-center">
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay="0">
						<a href="https://exchange.biswap.org/swap?outputCurrency=0x523821d20a283d955f6205B4C9252779Cd0f964B&inputCurrency=0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56" target="_blank"><img src="images/biswap.png" alt="BiSwap"></a>
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".1">
						<a href="https://quickswap.exchange/#/swap?outputCurrency=0xd3Ac016b1B8C80EeAdDe4D186A9138C9324e4189&inputCurrency=0x2791Bca1f2de4661ED88A30C99A7a9449Aa84174" target="_blank"><img src="images/quickswap.png" alt="QuickSwap"></a>
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".2">
						<a href="https://traderjoexyz.com/trade?outputCurrency=0xd3Ac016b1B8C80EeAdDe4D186A9138C9324e4189&inputCurrency=0xB97EF9Ef8734C71904D8002F8b6Bc66Dd9c48a6E" target="_blank"><img src="images/traderjoe.png" alt="Trader Joe"></a>
						</div>
					</div>
				</div>
				
				<div class="row text-center">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-sm">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".3">
								<a href="https://apeswap.finance/swap?outputCurrency=0x523821d20a283d955f6205B4C9252779Cd0f964B&inputCurrency=0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56" target="_blank"><img src="images/apeswap.png" alt="ApeSwap"></a>
								</div>
							</div>
							<div class="col-sm">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".4">
								<a href="https://app.pangolin.exchange/#/swap?outputCurrency=0xd3Ac016b1B8C80EeAdDe4D186A9138C9324e4189&inputCurrency=0xB97EF9Ef8734C71904D8002F8b6Bc66Dd9c48a6E" target="_blank"><img src="images/pangolin.png" alt="Pangolin"></a> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br/>
			
			
			<div class="partner-list">
				<div class="row text-center">
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay="0">
						<a href="https://bsc.mdex.com/#/swap?outputCurrency=0x523821d20a283d955f6205B4C9252779Cd0f964B&inputCurrency=0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56" target="_blank"><img src="images/mdex.png" alt="MDEX"></a>
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".1">
						<a href="https://www.bakeryswap.org/#/swap?outputCurrency=0x523821d20a283d955f6205B4C9252779Cd0f964B&inputCurrency=0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56" target="_blank"><img src="images/bakeryswap.png" alt="BakerySwap"></a>
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".2">
						<a href="https://btcpop.co/Exchange/OK" target="_blank"><img src="images/btcpop.png" alt="BTCpop"></a>
						</div>
					</div>
				</div>
				
				<div class="row text-center">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-sm">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".3">

									<!-- <a href="https://www.unnamed.exchange/Exchange?market=OK_BTC" target="_blank"><img src="images/unnamed.png" alt="Unnamed"></a> -->

								</div>
							</div>
							<div class="col-sm">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".4">
								<!-- <a href="https://www.finexbox.com/market/pair/OK-BTC.html" target="_blank"><img src="images/finexbox.png" alt="FinexBox"></a> -->
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
			<br/>
			
			
			<div class="partner-list">
				<div class="row text-center">
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay="0">
							<!-- <a href="https://trade.zer-dex.market/market/BIRAKE.OK_BIRAKE.BTC" target="_blank"><img src="images/zerdex.png" alt="Zer-Dex"></a> -->
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".1">
							<!-- <a href="https://www.bitladon.com/okcash" target="_blank"><img src="images/bitladon.png" alt="Bitladon"></a> -->
						</div>
					</div> 
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".2">
							<!-- <a href="https://trade.birake.com/market/BIRAKE.OK_BIRAKE.BTC" target="_blank"><img src="images/birake.png" alt="Birake"></a> -->
						</div>
					</div>
				</div>
				
				<div class="row text-center">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-sm">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".3">
									<!-- <a href="https://trade.ataix.com/OK-BTC" target="_blank"><img src="images/ataix.png" alt="Ataix"></a> -->
								</div>
							</div>
							<div class="col-sm">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".4">
								<!-- <a href="https://swapspace.co/" target="_blank"><img src="images/swapspace.png" alt="SwapSpace"></a>   -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br/>
			
			
			<div class="partner-list">
				<div class="row text-center">
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay="0">
							<!-- <a href="https://hazel.exchange/exchange/OK_BTC" target="_blank"><img src="images/socialsendex.png" alt="Social Send Exchange"></a>  -->
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".1">
							<!-- <a href="https://vindax.com/exchange-base.html?symbol=OK_BTC" target="_blank"><img src="images/vindax.png" alt="Vindax"></a>	 -->						
						</div>
					</div>
					<div class="col-sm">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".2">
							<!-- <a href="https://swapzone.io/?from=ok&to=btc" target="_blank"><img src="images/swapzone.png" alt="VCC Exchange"></a>  -->
						</div>
					</div>
				</div>
				
				<div class="row text-center">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-sm">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".3">
									<!-- <a href="https://trade.ataix.com/OK-BTC" target="_blank"><img src="images/ataix.png" alt="Ataix"></a>  -->
								</div>
							</div>
							<div class="col-sm">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".4">
								<!-- <a href="https://swapspace.co/" target="_blank"><img src="images/swapspace.png" alt="SwapSpace"></a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br/><br/>
	<!-- Start Section -->


	<!-- Start Section -->
	<div class="section section-pad section-bg section-connect" id="stats">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6 offset-md-3">
					<div class="section-head">
						<h6 class="section-title-sm animated" data-animate="fadeInUp" data-delay="0">Find more Okcash info &amp; stats over:</h6>
					</div>
				</div>
			</div>
			<div class="partner-list">
				<div class="row text-center">
					<div class="col-sm col-6">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".1">
							<a href="https://coinmarketcap.com/currencies/okcash/" target="_blank"><img src="images/coinmarketcap.png" alt="ok stats & info"></a>
						</div>
					</div>
					<div class="col-sm col-6">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".2">
							<a href="https://www.cryptocompare.com/coins/ok/overview" target="_blank"><img src="images/cryptocompare.png" alt="ok stats & info"></a>
						</div>
					</div>
					<div class="col-sm col-6">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".3">
							<a href="https://info.binance.com/en/currencies/okcash" target="_blank"><img src="images/binance.png" alt="ok stats & info"></a>
						</div>
					</div>
					<div class="col-sm col-6">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".4">
							<a href="https://www.coinbase.com/price/okcash" target="_blank"><img src="images/coinbase.png" alt="ok stats & info"></a>
						</div>
					</div>
					<div class="col-sm col-6">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".5">
							<a href="https://www.coingecko.com/en/coins/okcash" target="_blank"><img src="images/coingecko.png" alt="ok stats & info"></a>
						</div>
					</div>
					<div class="col-sm col-6">
						<div class="single-partner animated" data-animate="fadeInUp" data-delay=".6">
							<a href="https://coincap.io/assets/okcash/" target="_blank"><img src="images/coincap.png" alt="ok stats & info"></a>
						</div>
					</div>
				</div>
				<div class="row text-center">
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".7">
									<a href="https://www.investing.com/crypto/okcash" target="_blank"><img src="images/investing.png" alt="ok stats & info"></a>
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".8">
									<a href="https://www.coinhills.com/market/ok/" target="_blank"><img src="images/coinhills.png" alt="ok stats & info"></a>
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".9">
									<a href="https://www.forbes.com/sites/shehanchandrasekera/2020/02/03/how-staking-tezos-may-generate-rental-income/#b08afc403474" target="_blank"><img src="images/forbes.png" alt="ok stats & info"></a>
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay="1">
									<a href="https://coincircus.io/coins.php?symbol=OK" target="_blank"><img src="images/coincircus.png" alt="ok stats & info"></a>
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay="1.1">
									<a href="https://www.tradingview.com/symbols/OKUSD/technicals/" target="_blank"><img src="images/tradingview.png" alt="ok stats & info"></a>
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay="1.2">
									<a href="https://coinranking.com/coin/9-C1-XaX7APZr+okcash-ok" target="_blank"><img src="images/coinranking.png" alt="ok stats & info"></a>
								</div>
							</div>
				</div>
				<div class="row text-center">
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay="1.3">
									<a href="https://cryptoslate.com/coins/okcash/" target="_blank"><img src="images/cryptoslate.png" alt="ok stats & info"></a>
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay="1.4">
									<a href="https://www.cryptoground.com/okcash-price-prediction" target="_blank"><img src="images/cryptoground.png" alt="ok stats & info"></a>
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay="1.5">
									<a href="https://www.stakingrewards.com/asset/okcash" target="_blank"><img src="images/stakingrewards.png" alt="ok stats & info"></a>
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay="1.6">
									<a href="https://www.worldcoinindex.com/coin/Okcash" target="_blank"><img src="images/wcindex.png" alt="ok stats & info"></a>
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay="1.7">
									<a href="https://coinclarity.com/coin/ok/" target="_blank"><img src="images/coinclarity.png" alt="ok stats & info"></a>
								</div>
							</div>
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay="1.8">
									<a href="https://cointostake.com/okcash.php" target="_blank"><img src="images/cointostake.png" alt="ok stats & info"></a>
								</div>
							</div>
				</div>
				<div class="row text-center">
							<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay="1.3">
									<a href="https://member.icoperf.com/portal/detail/223/" target="_blank"><img src="images/icoperf.png" alt="ok stats & info"></a>
								</div>
							</div>
				<div class="col-sm col-6">
								<div class="single-partner animated" data-animate="fadeInUp" data-delay=".9">
									<a href="https://www.ratingtoken.net/ratings/OK-1" target="_blank"><img src="images/ratingtoken.png" alt="ok stats & info"></a>
								</div>
							</div>
							
				</div> 
			</div>
		</div>
	</div>
	<!-- End Section -->
	
	
	<!-- Start Section -->
	<div class="section section-pad section-bg-dark blog-section" id="participate">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<div class="section-head">
						<h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">OK Heroes
							<span>Participate</span>
						</h2>
						<p class="animated" data-animate="fadeInUp" data-delay=".1">
						Become an <b>OK Hero</b>! Okcash was born from a small community and has grown fast. </br>
						This is all thanks to the support from the community, who are the real OK Heroes. You can become one too! </br>
						There are a lot of things you can do to participate and support OK and help others learn more and get empowered. </br>
						Let's change the world! </br>
						</p>
					</div>
				</div>
			</div><!-- .row -->
			
			<div class="blog-list">
				<div class="row">
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item animated" data-animate="fadeInUp" data-delay="0">
							<div class="blog-photo"><img src="images/using-okcash.jpg" alt="blog-photo"></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li>1</li>
									<li>Use OK coins</li>
								</ul>
								<h5 class="blog-title">Using Okcash</h5>
								<p align="justify"><a href="https://okcash.org/getting-started.html" target="_blank">Using OK</a> is the first thing you can do to support Okcash. There are probably many cases where it can make your life easier. You can accept payments and make purchases with Okcash.</p>
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item animated" data-animate="fadeInUp" data-delay=".1">
							<div class="blog-photo"><img src="images/okcash-network.jpg" alt="blog-photo"></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li>2</li>
									<li>Be the OK Network</li>
								</ul>
								<h5 class="blog-title">The Okcash Network</h5>
								<p align="justify">With just an Internet connection, you can help strengthen the OK network by keeping an <a href="https://okcash.org/#jf_download" target="_blank">Okcash full node wallet</a> running on your computer or server. Full nodes secure &amp; relay transactions.</p>
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item animated" data-animate="fadeInUp" data-delay=".2">
							<div class="blog-photo"><img src="images/okcash-staking.jpg" alt="blog-photo"></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li>3</li>
									<li>Stake (Mine) OK coins</li>
								</ul>
								<h5 class="blog-title">Staking</h5>
								<p align="justify">You can start <a href="https://okcash.org/faq.html" target="_blank">staking</a> OK coins to help secure and process transactions. In order to protect the network, you can stake your OK coins in your own OK wallet or in the different staking pools. </p>
							</div>
						</div>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .blog-list -->
			
			<div class="blog-list">
				<div class="row">
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item animated" data-animate="fadeInUp" data-delay="0">
							<div class="blog-photo"><img src="images/translate.jpg" alt="blog-photo"></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li>4</li>
									<li>Translate OK to the world</li>
								</ul>
								<h5 class="blog-title">Translate</h5>
								<p align="justify">You can help spread Okcash awareness by translating or improving translations inside important parts of the OK ecosystem or translate articles and guides that can help new users. </p>
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item animated" data-animate="fadeInUp" data-delay=".1">
							<div class="blog-photo"><img src="images/development.jpg" alt="blog-photo"></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li>5</li>
									<li>Help Develop OK</li>
								</ul>
								<h5 class="blog-title">Development</h5>
								<p align="justify">Okcash is free software. If you are a developer, you can use your superpowers to do good and improve Okcash. Or you can build amazing new services or software that use Okcash. </p>
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item animated" data-animate="fadeInUp" data-delay=".2">
							<div class="blog-photo"><img src="images/donate.jpg" alt="blog-photo"></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li>6</li>
									<li>Sharing is Caring</li>
								</ul>
								<h5 class="blog-title">Donation</h5>
								<p align="justify">The easiest way to help is to donate some OK to charity projects. Or you can help directly fund any project related to Okcash that you believe will be helpful in the future. </p>
							</div>
						</div>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .blog-list -->
			
			<div class="blog-list">
				<div class="row">
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item animated" data-animate="fadeInUp" data-delay="0">
							<div class="blog-photo"><img src="images/communities.jpg" alt="blog-photo"></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li>7</li>
									<li>Meet the OK communities</li>
								</ul>
								<h5 class="blog-title">Communities</h5>
								<p align="justify">You can join Okcash communities and talk with other OK enthusiasts. You can learn more about Okcash every day, give help to new users and get involved in interesting projects. You can also create your own Okcash communities. </p>
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item animated" data-animate="fadeInUp" data-delay=".1">
							<div class="blog-photo"><img src="images/spread-the-word.jpg" alt="blog-photo"></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li>8</li>
									<li>Share Okcash with the world</li>
								</ul>
								<h5 class="blog-title">Plant the OK seeds</h5>
								<p align="justify">Speak about Okcash to interested people. Write about it on your blog. Tell your favorite shops you would like to pay with Okcash. Help to keep merchant directories up to date. Or be creative and make yourself a nice Okcash T-shirt.</p>
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
						<div class="blog-item animated" data-animate="fadeInUp" data-delay=".2">
							<div class="blog-photo"><img src="images/documentation.jpg" alt="blog-photo"></div>
							<div class="blog-texts">
								<ul class="blog-meta">
									<li>9</li>
									<li>Documentation is key</li>
								</ul>
								<h5 class="blog-title">Documentation</h5>
								<p align="justify">Okcash.org provides useful document- ation and we are constantly improving the information it contains. You can help to improve these resources and keep them up to date or add new translations over the <a href="https://github.com/okcashpro/okcash.org.website" target="_blank"> <em class="fab fa-github"></em> Okcash.org Github</a></p>
							</div>
						</div>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .blog-list -->
			
		</div><!-- .container -->
	</div>
	<!-- Start Section -->


		<!-- Start Section -->
	<div class="section section-pad no-pb section-bg-alt" id="faq">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="section-head">
						<h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">Frequently asked questions
							<span>OK</span>
						</h2>
						<p class="animated" data-animate="fadeInUp" data-delay=".1">Find answers to recurring questions and myths about Okcash.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="tab-custom">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs text-center animated" data-animate="fadeInUp" data-delay="0">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1">General</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2">Transactions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3">Staking</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4">Security</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-5">Legal</a>
							</li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content animated" data-animate="fadeInUp" data-delay=".1">
							<div class="tab-pane fade show active" id="tab-1">
								<div class="accordion" id="accordion-1">
									<div class="card">
										<div class="card-header">
											<h5>
												<a data-toggle="collapse" data-target="#collapse-1-1">
													What is Okcash?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-1-1" class="collapse show" data-parent="#accordion-1">
											<div class="card-body">
												<p>Okcash is a multi chain and energy friendly consensus network that enables a new payment system and a complete control over your digital cash. It is one of the first proof of stake decentralized peer-to-peer payment networks that is powered by its users with no central authority or middlemen. From a user perspective, Okcash is pretty much like fast and energry friendly cash for the Internet. Okcash can also be seen as one of the most prominent proof of stake triple entry bookkeeping system in existence.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-1-2">
												  Who controls the Okcash network?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-1-2" class="collapse" data-parent="#accordion-1">
											<div class="card-body">
												<p>Nobody owns the Okcash network much like no one owns Bitcoin or like no one owns the technology behind email. Okcash is controlled by all Okcash users around the world. While developers are improving the software, they can't force a change in the Okcash protocol because all users are free to choose what software and version they use. In order to stay compatible with each other, all users need to use software complying with the same rules. Okcash can only work correctly with a complete consensus among all users. Therefore, all users and developers have a strong incentive to protect this consensus.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-1-3">
												  How does Okcash work?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-1-3" class="collapse" data-parent="#accordion-1">
											<div class="card-body">
												<p>From a user perspective, Okcash is nothing more than a computer program or mobile app that provides a personal Okcash wallet and allows a user to send and receive Okcash with them. This is how Okcash works for most users.<br/>
												
												Behind the scenes, the Okcash network is sharing a public ledger called the "OK block chain". This ledger contains every transaction ever processed, allowing a user's computer to verify the validity of each transaction. The authenticity of each transaction is protected by digital signatures corresponding to the sending addresses, allowing all users to have full control over sending OK coins from their own Okcash addresses. In addition, anyone can process transactions using the computing power of their processor and earn a reward in OK coins for this service. This process is often called "staking".</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-1-4">
												  Can I make money with Okcash?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-1-4" class="collapse" data-parent="#accordion-1">
											<div class="card-body">
												<p>You should never expect to get rich with Okcash or any emerging technology. It is always important to be wary of anything that sounds too good to be true or disobeys basic economic rules.<br/>
												
												Okcash is a growing space of sustainable multi chain and energy friendly innovation and there are business opportunities that also include risks. There is no guarantee that Okcash will continue to grow even though it has developed at a very fast rate so far. Investing time and resources on anything related to Okcash requires entrepreneurship. There are various ways to make money with Okcash such as staking, speculation or running new businesses. All of these methods are competitive and there is no guarantee of profit. It is up to each individual to make a proper evaluation of the costs and the risks involved in any such project.</p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End tab-pane -->
							<div class="tab-pane fade" id="tab-2">
								<div class="accordion" id="accordion-2">
									<div class="card">
										<div class="card-header">
											<h5>
												<a data-toggle="collapse" data-target="#collapse-2-1">
												  Why do I have to wait for confirmation?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-2-1" class="collapse show" data-parent="#accordion-2">
											<div class="card-body">
												<p>Receiving notification of a payment is almost instant with Okcash. However, there is a delay before the network begins to confirm your transaction by including it in a block. A confirmation means that there is a consensus on the network that the OK coins you received haven't been sent to anyone else and are considered your property. Once your transaction has been included in one block, it will continue to be buried under every block after it, which will exponentially consolidate this consensus and decrease the risk of a reversed transaction. Each confirmation takes between 1 second and 144 seconds, with 72 seconds being the average. If the transaction pays too low a fee or is otherwise atypical, getting the first confirmation can take longer. Every user is free to determine at what point they consider a transaction sufficiently confirmed, but <a href="https://okcash.org/you-need-to-know.html#instant" target="_blank">5 confirmations</a> is often considered to be as safe as waiting 5 months on a credit card transaction. </p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-2-2">
													What if I receive a Okcash when my computer is powered off?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-2-2" class="collapse" data-parent="#accordion-2">
											<div class="card-body">
												<p>This works fine. The OK coins will appear next time you start your Okcash wallet application. The OK coins are not actually received by the software on your computer, they are appended to a public ledger that is shared between all the devices on the OK network. If you are sent Okcash when your wallet client program is not running and you later launch it, it will download blocks and catch up with any transactions it did not already know about, and the OK coins will eventually appear as if they were just received in real time. Your wallet is only needed when you wish to spend your Okcash.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-2-4">
												   What does "synchronizing" mean and why does it take so long?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-2-4" class="collapse" data-parent="#accordion-2">
											<div class="card-body">
												<p>Long synchronization time is only required with full node clients like OK Core. Technically speaking, synchronizing is the process of downloading and verifying all previous Okcash transactions on the OK network. For some Okcash clients to calculate the spendable balance of your Okcash wallet and make new transactions, it needs to be aware of all previous transactions. This step can be resource intensive and requires sufficient bandwidth and storage to accommodate the full size of the OK block chain. For Okcash to remain secure, enough people should keep using Okcash full node clients because they perform the task of validating and relaying transactions.</p>
											</div>
										</div>
									</div>
									
								</div>
							</div><!-- End tab-pane -->
							<div class="tab-pane fade" id="tab-3">
								<div class="accordion" id="accordion-3">
									<div class="card">
										<div class="card-header">
											<h5>
												<a data-toggle="collapse" data-target="#collapse-3-1">
													What is Okcash staking?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-3-1" class="collapse show" data-parent="#accordion-3">
											<div class="card-body">
												<p>Staking is the process of spending cpu power to process transactions, secure the network, and keep everyone in the system synchronized together. It can be perceived like the Okcash data center except that it has been designed to be fully decentralized with stakers operating in all countries and no individual having control over the network. This process is referred to as "staking" as a cross analogy to Bitcoin mining because it also provides a reward in exchange for useful services required to operate a secure payment network issued in new Okcash (OK coins). Unlike Bitcoin mining, however, Okcash staking is energy friendly and more sustainable. Staking will still be required after the last Okcash is issued.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-3-2">
												  How does Okcash staking work?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-3-2" class="collapse" data-parent="#accordion-3">
											<div class="card-body">
												<p>Anybody can become an Okcash staker by running the Okcash wallet software with some OK coins in the wallet. The OK wallet software listens for transactions broadcast through the peer-to-peer network and performs appropriate tasks to process and confirm these transactions. Okcash stakers perform this work because they can earn transaction fees paid by users for faster transaction processing, and newly created OK coins issued into existence according to a fixed formula.<br/>
												Okcash stakers are neither able to cheat by increasing their own reward nor process fraudulent transactions that could corrupt the OK network because all Okcash nodes would reject any block that contains invalid data as per the rules of the Okcash protocol. Consequently, the OK network remains secure even if not all Okcash stakers can be trusted.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-3-3">
												  How does staking help secure Okcash?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-3-3" class="collapse" data-parent="#accordion-3">
											<div class="card-body">
												<p>Staking creates the equivalent of a competitive lottery that makes it very difficult for anyone to consecutively add new blocks of transactions into the OK block chain. This protects the neutrality of the OK network by preventing any individual from gaining the power to block certain transactions. This also prevents any individual from replacing parts of the OK block chain to roll back their own spends, which could be used to defraud other users. Staking makes it exponentially more difficult to reverse a past transaction by requiring the rewriting of all blocks following this transaction.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-3-4">
												  What do I need to start staking?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-3-4" class="collapse" data-parent="#accordion-3">
											<div class="card-body">
												<p>You only need to have OK coins and stake them in the Okcash wallet or in a staking pool.</p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End tab-pane -->
							<div class="tab-pane fade" id="tab-4">
								<div class="accordion" id="accordion-4">
									<div class="card">
										<div class="card-header">
											<h5>
												<a data-toggle="collapse" data-target="#collapse-4-1">
													Is Okcash secure?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-4-1" class="collapse show" data-parent="#accordion-4">
											<div class="card-body">
												<p>The OK technology - the protocol and the cryptography - has a strong security track record, and the OK network is one of the big distributed computing projects in the world. Okcash's most common vulnerability is in user error. Okcash wallet files that store the necessary private keys can be accidentally deleted, lost or stolen. This is pretty similar to physical cash stored in a digital form. Fortunately, users can employ sound <a href="https://okcash.org/secure-your-wallet.html" target="_blank">security practices</a> to protect their money or use service providers that offer good levels of security and insurance against theft or loss.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-4-2">
												  Hasn't Okcash been hacked in the past?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-4-2" class="collapse" data-parent="#accordion-4">
											<div class="card-body">
												<p>The rules of the protocol and the cryptography used for Okcash are still working years after its inception, which is a good indication that the concept is well designed. However, security flaws have been found and fixed over time in various software implementations. Like any other form of software, the security of Okcash software depends on the speed with which problems are found and fixed. The more such issues are discovered, the more Okcash is gaining maturity.
												<br/>
												There are often misconceptions about thefts and security breaches that happened on diverse exchanges and businesses. Although these events are unfortunate, none of them involve Okcash itself being hacked, nor imply inherent flaws in Okcash; just like a bank robbery doesn't mean that the dollar is compromised. However, it is accurate to say that a complete set of good practices and intuitive security solutions is needed to give users better protection of their money, and to reduce the general risk of theft and loss. Over the course of the last few years, such security features have quickly developed, such as wallet encryption, offline wallets, multi-signature transactions and hardware wallets.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-4-3">
												  Is Okcash vulnerable to quantum computing?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-4-3" class="collapse" data-parent="#accordion-4">
											<div class="card-body">
												<p>Yes, most systems relying on cryptography in general are, including Bitcoin and traditional banking systems. However, quantum computers don't yet exist and probably won't for a while. In the event that quantum computing could be an imminent threat to Okcash, the protocol could be upgraded to use post-quantum algorithms. Given the importance that this update would have, it can be safely expected that it would be highly reviewed by developers and adopted by all OK users.</p>
											</div>
										</div>
									</div>
									
								</div>
							</div><!-- End tab-pane -->
							<div class="tab-pane fade" id="tab-5">
								<div class="accordion" id="accordion-5">
									<div class="card">
										<div class="card-header">
											<h5>
												<a data-toggle="collapse" data-target="#collapse-5-1">
													Is Okcash legal?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-5-1" class="collapse show" data-parent="#accordion-5">
											<div class="card-body">
												<p>To the best of our knowledge, Okcash has not been made illegal by legislation in most jurisdictions. However, some jurisdictions (such as Argentina and Russia) severely restrict or ban foreign currencies. Other jurisdictions (such as Thailand) may limit the licensing of certain entities such as Bitcoin and Cryptocurrency exchanges.
												<br/>
												Regulators from various jurisdictions are taking steps to provide individuals and businesses with rules on how to integrate this new technology with the formal, regulated financial system. For example, the Financial Crimes Enforcement Network (FinCEN), a bureau in the United States Treasury Department, issued non-binding guidance on how it characterizes certain activities involving virtual currencies.</p>
											</div>
										</div>
									</div>
									
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-5-2">
												  What about Okcash and taxes?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-5-2" class="collapse" data-parent="#accordion-5">
											<div class="card-body">
												<p>Okcash is not a fiat currency with legal tender status in any jurisdiction, but often tax liability accrues regardless of the medium used. There is a wide variety of legislation in many different jurisdictions which could cause income, sales, payroll, capital gains, or some other form of tax liability to arise with Okcash.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header">
											<h5>
												<a class="collapsed" data-toggle="collapse" data-target="#collapse-5-3">
												  What about Okcash and consumer protection?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
												</a>
											</h5>
										</div>
										<div id="collapse-5-3" class="collapse" data-parent="#accordion-5">
											<div class="card-body">
												<p>Okcash is freeing people to transact on their own terms. Each user can send and receive payments in a similar way to cash but they can also take part in more complex contracts. Multiple signatures allow a transaction to be accepted by the network only if a certain number of a defined group of persons agree to sign the transaction. This allows innovative dispute mediation services to be developed in the future. Such services could allow a third party to approve or reject a transaction in case of disagreement between the other parties without having control on their money. As opposed to cash and other payment methods, Okcash always leaves a public proof that a transaction did take place, which can potentially be used in a recourse against businesses with fraudulent practices.</p>
											</div>
										</div>
									</div>
								</div><!-- End accordion -->
							</div><!-- End tab-pane -->
						</div><!-- End tab-content -->
					</div><!-- End tab-custom -->
				</div><!-- End col -->
			</div><!-- End row -->
		</div><!-- End container -->
	</div>
	<!-- End Section -->


	<!-- Start Section -->
	<div class="section section-pad section-bg-alt" id="ok-voluntaries">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<div class="section-head">
						<h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">OK Teams
							<span>Okcash</span>
						</h2>
						<p class="animated" data-animate="fadeInUp" data-delay=".1">"We are the nerds, the misfits, the rebels, the troublemakers, the crazy ones enough to believe we can do so with our passion."
						</br>~ In answer to Steve Jobs "The Crazy Ones" </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<img src="images/ok-volunteers.png" alt="OK Volunteers">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<!-- <img src="images/okcash-cryptocurrency.jpg" alt="OK"> -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->


	<!-- Start Section -->
	<div class="section subscribe-section section-pad-md section-bg section-connect" id="sharing">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6 offset-md-3">
					<h4 class="section-title-md animated" data-animate="fadeInUp" data-delay="0">Join the different giveaways and faucets made by the community to support and share Okcash to Empower Everyone!</h4>
						
						<a href="https://discord.io/cryptocurrency" class="btn btn-sm" target="_blank">Cryptogiveaways over Discord</a>
						<!-- <a href="https://crex24.com/faucets" class="btn btn-sm" target="_blank">Crex24 Faucet</a>
						<a href="https://btcpop.co/Faucet/OK" class="btn btn-sm" target="_blank">BTCpop Faucet</a> -->
						
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->


	<!-- Start Section -->
	<div class="section footer-scetion no-pt section-pad-sm section-bg">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<ul class="social">
						<li class="animated" data-animate="fadeInUp" data-delay="0"><a href="https://discord.io/cryptocurrency" target="_blank"><em class="fab fa-discord"></em></a></li>
						<li class="animated" data-animate="fadeInUp" data-delay=".1"><a href="https://t.me/okcash" target="_blank"><em class="fab fa-telegram"></em></a></li>
						<li class="animated" data-animate="fadeInUp" data-delay=".2"><a href="https://twitter.com/search?q=okcash" target="_blank"><em class="fab fa-twitter"></em></a></li>
						<li class="animated" data-animate="fadeInUp" data-delay=".3"><a href="https://www.reddit.com/r/OKcash/" target="_blank"><em class="fab fa-reddit"></em></a></li>
						<li class="animated" data-animate="fadeInUp" data-delay=".4"><a href="https://github.com/okcashpro/okcash" target="_blank"><em class="fab fa-github"></em></a></li>
						<li class="animated" data-animate="fadeInUp" data-delay=".5"><a href="https://bitcointalk.org/index.php?topic=1028368.0" target="_blank"><em class="fab fa-bitcoin"></em></a></li>
						<li class="animated" data-animate="fadeInUp" data-delay=".6"><a href="https://okcash.news" target="_blank"><em class="fab fa-medium-m"></em></a></li>
					</ul>
					<span class="copyright-text animated" data-animate="fadeInUp" data-delay=".3">
						© 2014-2022 Okcash Project. Released under the <a href="https://github.com/okcashpro/okcash/blob/master/COPYING" target="_blank">MIT license</a>.
						<span>All trademarks and copyrights belong to their respective owners.</span>
					</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Preloader -->
	<div id="preloader">
		<div id="loader"></div>
		<div class="loader-section loader-top"></div>
   		<div class="loader-section loader-bottom"></div>
	</div>
	<!-- Preloader End -->

	<!-- JavaScript (include all script here) -->
	<script src="assets/js/jquery.bundle.js?ver=142"></script>
	<script src="assets/js/script.js?ver=142"></script>

</body>
</html>
