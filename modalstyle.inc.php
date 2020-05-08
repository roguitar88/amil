<style>
/*START: This is for the modal popup box (report video)*/
.modal_2 {
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.5);
	opacity: 0;
	visibility: hidden;
	transform: scale(1.1);
	transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}
.modal-content_2 {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background-color: orange;
	padding-top: 2rem;
	padding-left: 2.5rem;
	padding-right: 2.5rem;
	padding-bottom: 2rem;
	width: 55rem;
	border-radius: 0; /*0.5rem;*/
	background-image: url("images/ad.jpg");
	background-position:  0 40%
  background-repeat: no-repeat;
  background-size: cover;
}
.modalwrapper{
	width: 55%;
	border-radius: 0.5rem;
	background: rgba(255,255,255,0.75);
	padding-top: 2rem;
	padding-left: 2.5rem;
	padding-right: 2.5rem;
	padding-bottom: 30rem;
}
.modalwrapper h3{
	color:#1D69AA;
}
.preferencia{
	position:absolute;
	bottom:4rem;
	font-size:90%;
	color:#A41DAA;
}
.close-button_2 {
	float: right;
	width: 1.5rem;
	line-height: 1.5rem;
	text-align: center;
	cursor: pointer;
	border-radius: 0.25rem;
	background-color: lightgray;
}
.close-button_2:hover {
	background-color: darkgray;
}
.show-modal_2 {
	opacity: 1;
	visibility: visible;
	transform: scale(1.0);
	transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
	z-index:1203;
}
/*END: This is for the modal popup box (report video)*/
</style>
