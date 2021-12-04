<?

	include_once("DBManager.php");

	class Option_Item{
		var $Option_Item_ID, $Userid, $Option_ID, $Option_Display, $Option_Value, $Quota, $Sort_Order, $Date_Added;		
		var $total_records;
					
		function Option_Item($Option_Item_ID = 0)
		{	
			$this->Option_Item_ID = 0;						
			
			if ( $Option_Item_ID > 0 )
			{	
				$db = new DBManager();
				$sql = "SELECT * FROM Tbl_Option_Item WHERE Option_Item_ID = " . $Option_Item_ID;
				//echo $sql."<br>";
				$r = $db->search_query($sql);

				if ( mysql_num_rows($r) >0 ) 
				{
					$row = mysql_fetch_array($r);
					$this->Option_Item_ID = $row["Option_Item_ID"];
					$this->Userid = $row["Userid"];					
					$this->Option_ID = $row["Option_ID"];	
					$this->Option_Display = $row["Option_Display"];	
					$this->Option_Value = $row["Option_Value"];	
					$this->Quota = $row["Quota"];						
					$this->Sort_Order = $row["Sort_Order"];																
					$this->Date_Added = $row["Date_Added"];																																																																																																										
				} // if mysql_num_rows
			} // if Option_ID
		} // function Option
		
		// GET METHOD
		function getOptionItemID() { return $this->Option_Item_ID; }
		function getUserid() { return $this->Userid; }
		function getOptionID() { return $this->Option_ID; }		
		function getOptionDisplay() { return $this->Option_Display; }
		function getOptionValue() { return $this->Option_Value; }
		function getQuota() { return $this->Quota;}		
		function getSortOrder() { return $this->Sort_Order;}
		function getDateAdded() { return $this->Date_Added;}
																																													
	
		// SET METHOD
		function setUserid($Userid){$this->Userid = $Userid;}
		function setOptionID($Option_ID){$this->Option_ID = $Option_ID;}
		function setOptionDisplay($Option_Display){$this->Option_Display = $Option_Display;}
		function setOptionValue($Option_Value){$this->Option_Value = $Option_Value;}
		function setQuota($Quota){$this->Quota = $Quota;}		
		function setSortOrder($Sort_Order){$this->Sort_Order = $Sort_Order;}									
	
		function updateRecord(){
	
			$sql = " UPDATE Tbl_Option_Item SET " ;
			$sql .=  "Option_Display='".$this->Option_Display."',";
			$sql .=  "Option_Value='". $this->Option_Value ."', ";
			$sql .=  "Quota='". $this->Quota ."', ";			
			$sql .=  "Sort_Order='". $this->Sort_Order ."' ";
			$sql .=  "WHERE Option_Item_ID = " . $this->Option_Item_ID;
			//echo $sql;
			$db = new DBManager();
			$count = $db->update_query($sql);
	
			return $count;
		}
		
		function addRecord(){
		
			$sql = " Insert into Tbl_Option_Item SET " ;
			$sql .=  "Userid='".$this->Userid."', ";
			$sql .=  "Option_ID='".$this->Option_ID."', ";
			$sql .=  "Option_Display='".$this->Option_Display."', ";		
			$sql .=  "Option_Value='".$this->Option_Value."', ";	
			$sql .=  "Quota='". $this->Quota ."', ";			
			$sql .=  "Sort_Order=".$this->Sort_Order.", ";		
			$sql .=  "Date_Added=now()" ;
			//echo $sql."<br>";
			$db = new DBManager();
			$count = $db->update_query($sql);
				
			return $count;
		}
		
		function deleteRecord(){
			$db = new DBManager();
			$sql = "DELETE FROM Tbl_Option_Item WHERE Option_Item_ID='" . $this->Option_Item_ID . "'";
			$count = $db->update_query($sql);
	
			return $count;
		}
		

		
		function searchRecord($sql)
		{
			$db = new DBManager();
			$sql = $sql;
			$r = $db->search_query($sql);
			return $r;
		}
	
	}
?>