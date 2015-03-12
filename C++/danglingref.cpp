#include <iostream>
using namespace std;

void f(int& x)
{
	x++;
}

//dangling ref since a goes out of scope once this function ends, dont do this, might work until someone overwrites memory of a
int& dangling()
{
	int a = 3;
	return a;
}

int main(int argc, char const *argv[])
{
	int x = 1;
	f(x);
	cout<<"x = "<<x<<endl;
	return 0;
}