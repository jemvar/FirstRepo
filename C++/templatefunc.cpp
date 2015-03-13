#include "Person.h"
#include <iostream>

using namespace std;

template <class T>
T max(T& t1, T& t2)
{
	return t1<t2 ? t2 : t1;
}

int main(int argc, char const *argv[])
{
	cout<<max(3,4)<<endl;
	cout<<max("abc","def")<<endl;
	Person p("V","M",3);
	Person p1("V","N",2);
	cout<<max(p,p1).getName()<<endl;
	cout<<max<double>(31.2,31)<<endl;
	// cout<<max<int>(31.2,31)<<endl;
	return 0;
}