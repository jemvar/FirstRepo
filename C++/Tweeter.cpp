#include "Tweeter.h"
#include <iostream>
using namespace std;

Tweeter::Tweeter(string first, string last, int arbitrary, string handle):Person(first,last,arbitrary),twitterhandle(handle)
{
	cout<<"Constructing "<<twitterhandle<<endl;
}

Tweeter::~Tweeter()
{
	cout<<"Destructing "<<twitterhandle<<endl;
}