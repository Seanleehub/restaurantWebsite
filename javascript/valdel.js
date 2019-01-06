
			
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
		

		
				
				
			
			function ValidateForm(formObj) {
		
				name = formObj.entername.value;
				pnum = formObj.enterphonenum.value;
		
				date = formObj.enterdate.value;
		
			
				// validate firstname
				if(!ValidateName(name))  {
				    formObj.entername.select();
				    return false;
				}
				if(!Validatephonenum(pnum))  {
				    formObj.enterphonenum.select();
				    return false;
				}
			
				if(!Validatedate(date))  {
				    formObj.enterdate.select();
				    return false;
				}
					
			
			
							
				return true;
			}
		