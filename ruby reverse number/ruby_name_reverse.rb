# Ruby program to accept first and last name from the user
# and print them in reverse order with a space between them

puts "Enter your first name: "
first_name = gets.chomp

puts "Enter your last name: "
last_name = gets.chomp

full_name = "#{last_name} #{first_name}"
puts "Your name in reverse order is: #{full_name}"
