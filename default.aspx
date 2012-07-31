<script runat="server">
private void Page_Load(object sender, System.EventArgs e)
{
Response.Status = "301 Moved Permanently";
Response.AddHeader("Location","http://www.new-location.com");
}
</script>