
			
			function ValidateName(name) {
				validChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ ";
				len = name.length;

				if(name == "") { alert("Name MUST contain a value"); return false; }
				
				
		        for(i=0 ; i<len ; i++) {
					letterPos = validChars.indexOf(name.charAt(i), 0);
					if(letterPos < 0) {
						alert("Value of Name HAS to be in CAPITAL LETTERS or has INVALID  characters.");
						return false;
					}
				}
				return true;
			}
			
			function Validatephonenum(pnum) {
				validChars = "0123456789";
				len = pnum.length;

				if(pnum == "") { alert("PhoneNumber MUST contain a value"); return false; }
				
				
		        for(i=0 ; i<len ; i++) {
					letterPos = validChars.indexOf(pnum.charAt(i), 0);
					if(letterPos < 0) {
						alert("Value of Phone Number has INVALID  characters.");
						return false;
					}
				}
				if (len >10) {
						alert("DATE MUST contain either 10 or 8.");
						return false;
					}
					
				if (len <8) {
						alert("TIME MUST contain 10 or 8 digits.");
						return false;
					}
				return true;
			}
			function Validatetime(time) {
				validChars = "0123456789:";
				len = time.length;

				if(time == "") { alert("Time MUST contain a value"); return false; }
				
				
		        for(i=0 ; i<len ; i++) {
					letterPos = validChars.indexOf(time.charAt(i), 0);
					if(letterPos < 0) {
						alert("Value of TIME has INVALID  characters.");
						return false;
					}
				}
				if (len >5) {
						alert("TIME MUST contain four(4) digits and (1) : symbol.");
						return false;
					}
					
				if (len <5) {
						alert("TIME MUST contain four(4) digits and (1) : symbol.");
						return false;
					}
				 if (time.indexOf(":") != time.lastIndexOf(":")) {
					alert("Must contain only one : symbol.");
					return false;
				}
					
			    if (time.indexOf(":") < 0) {
					alert("Must contain at least one (1) : symbol.");
					return false;
				}
				return true;
			}
			function Validatepax(pax) {
				validChars = "0123456789- ";
				len = pax.length;

				if(pax == "") { alert("PAX MUST contain a value"); return false; }
				
				
		        for(i=0 ; i<len ; i++) {
					letterPos = validChars.indexOf(pax.charAt(i), 0);
					if(letterPos < 0) {
						alert("Value of PAX has INVALID  characters.");
						return false;
					}
				}
			
				return true;
			}
			function Validatedate(date) {
				validChars = "0123456789- ";
				len = date.length;

				if(date == "") { alert("DATE MUST contain a value"); return false; }
				
				
		        for(i=0 ; i<len ; i++) {
					letterPos = validChars.indexOf(date.charAt(i), 0);
					if(letterPos < 0) {
						alert("Value of DATE has INVALID  characters.");
						return false;
					}
				}
				if (len >10) {
						alert("DATE MUST contain four(8) digits and (2) - symbol.");
						return false;
					}
					
				if (len <10) {
						alert("TIME MUST contain four(8) digits and (2) - symbol.");
						return false;
					}
					
			    if (date.indexOf("-") < 0) {
					alert("Must contain at least two (2) - symbol.");
					return false;
				}
			
				return true;
			}
		
		function Validatetablenum(tnum) {
				validChars = "0123456789- ";
				len = tnum.length;

				if(tnum == "") { alert("Table Number MUST contain a value"); return false; }
				
				
		        for(i=0 ; i<len ; i++) {
					letterPos = validChars.indexOf(tnum.charAt(i), 0);
					if(letterPos < 0) {
						alert("Value of Table Number has INVALID  characters.");
						return false;
					}
				}
			
				return true;
			}
		
		function Validateid(id) {
				validChars = "0123456789";
				len = id.length;

				if(id == "") { alert("User ID MUST contain a value"); return false; }
				
				
		        for(i=0 ; i<len ; i++) {
					letterPos = validChars.indexOf(id.charAt(i), 0);
					if(letterPos < 0) {
						alert("Value of ID has INVALID  characters.");
						return false;
					}
				}
			
				return true;
			}
				
				
			
			function ValidateForm(formObj) {
		
				
				time = formObj.entertime.value;
				id = formObj.idnumber.value;
			
				// validate firstname
				if(!Validateid(id))  {
				    formObj.idnumber.select();
				    return false;
				}
			
			
			
				if(!Validatetime(time))  {
				    formObj.entertime.select();
				    return false;
				}
					
			
							
				return true;
			}
		