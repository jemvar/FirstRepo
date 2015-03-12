#include <iostream>
#include "Status.h"
using namespace std;

int main(int argc, char const *argv[])
{
	Status s = Pending;
	cout<<"Status is "<<s<<endl;
	s = Cancelled;
	cout<<"Status is "<<s<<endl;
	return 0;
}