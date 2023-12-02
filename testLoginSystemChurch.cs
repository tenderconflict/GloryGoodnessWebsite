using System;
using System.Data.SqlClient;

public partial class LoginChurch : System.Web.UI.Page
{
    //this needs the database file not in backup format
    string connectionString = "GloryGoodnessChurch.bak";

    protected void Page_Load(object sender, EventArgs e)
    {
        LoginButton.ServerClick += new EventHandler(LoginButton_Click);
    }

    protected void LoginButton_Click(object sender, EventArgs e)
    {
        string username = UsernameTextBox.Value;
        string password = PasswordTextBox.Value;

        using (SqlConnection connection = new SqlConnection(connectionString))
        {
            connection.Open();
            string query = "SELECT COUNT(*) FROM UsersTable WHERE Username = @username AND Password = @password";
            using (SqlCommand command = new SqlCommand(query, connection))
            {
                command.Parameters.AddWithValue("@username", username);
                command.Parameters.AddWithValue("@password", password); 
                //password still needs to be encrypted

                int count = (int)command.ExecuteScalar();
                if (count > 0)
                {
                    Session["username"] = username;
                    Response.Redirect("testloggedinpage.aspx"); 
                    // this redirects to the page behind the login, might need the .aspx extension
                }
                else
                {
                }
            }
        }
    }
}
