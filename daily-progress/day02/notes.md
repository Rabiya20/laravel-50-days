✅ 1. Basic Routes
✅ 2. Named Routes
✅ 3. Route Parameters (Required + Optional)

# 🟦 1. BASIC ROUTES

A route decides what happens when someone opens a URL.
Example:
If user visits /students → Laravel should show the students list.

# 🟪 2. NAMED ROUTES

Named routes give a name to a route.
Useful when:
✔ generating URLs
✔ redirecting
✔ linking inside blade files

# 🟧 3. ROUTE PARAMETERS

Parameters allow dynamic URLs like:
/student/10
/edit/5
/user/ali
we have:
A. REQUIRED PARAMETERS
B. OPTIONAL PARAMETERS (Use ? and provide default value)
C. Parameter + Regex Pattern (Allowed only numbers or letters)