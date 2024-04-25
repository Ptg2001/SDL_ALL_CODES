
require 'sinatra'
require 'net/smtp'
require 'erb'

# Method to send email
def send_email(to_email, subject, body)
  smtp_server = 'smtp.gmail.com'
  port = 587
  username = 'piyush.hole2001@gmail.com'
  password = 'dwiyzxreyqnuomzu'

  message = <<END_OF_MESSAGE
From: #{username}
To: #{to_email}
Subject: #{subject}

#{body}
END_OF_MESSAGE

  smtp = Net::SMTP.new(smtp_server, port)
  smtp.enable_starttls
  smtp.start('localhost', username, password, :login) do |smtp|
    smtp.send_message(message, username, to_email)
  end
end

get '/' do
  erb :index
end

post '/send_email' do
  to_email = params[:to_email]
  subject = params[:subject]
  body = params[:body]

  send_email(to_email, subject, body)

  @success_message = "Email sent successfully!"

  erb :index
end


__END__

@@ index
<!DOCTYPE html>
<html>
<head>
  <title>Send Email</title>
</head>
<body>
  <h1>Send Email</h1>
  <% if @success_message %>
    <p style="color: green;"><%= @success_message %></p>
  <% end %>
  <form action="/send_email" method="post">
    <label for="to_email">To Email:</label><br>
    <input type="email" id="to_email" name="to_email" required><br><br>
    <label for="subject">Subject:</label><br>
    <input type="text" id="subject" name="subject" required><br><br>
    <label for="body">Body:</label><br>
    <textarea id="body" name="body" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Send Email">
  </form>
</body>
</html>

