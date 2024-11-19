import sys


input_values = sys.argv[1].split(',')

if not all(value.replace('.', '', 1).isdigit() for value in input_values):
    print('<h1>Inputs must be numeric numbers</h1>')
    sys.exit()

numbers = list(map(float, input_values))

if any(num < 0 for num in numbers):
    print('<h2>Error: Input contains a negative number</h2>')
    sys.exit()

average = sum(numbers) / len(numbers)
avg_message = f"Average of the numbers is {average} and it is {
    'Greater than 50' if average > 50 else 'Less than or equal to 50'}."

positive_count = sum(1 for num in numbers if num > 0)
bitwise_message = f"The count of positive numbers is {
    'even' if positive_count % 2 == 0 else 'odd'}."

greater_than_10 = sorted(num for num in numbers if num > 10)

print("<h2>Results:</h2>")
print(f"<h3>Original Values: {', '.join(map(str, numbers))}</h3>")
print(f"<h3>Values Greater Than 10: {greater_than_10}</h3>")
print(f"<h3>{bitwise_message}</h3>")
print(f"<h3>{avg_message}</h3>")
