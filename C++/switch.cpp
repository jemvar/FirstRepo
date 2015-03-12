#include <iostream>
using namespace std;

int main(int argc, char const *argv[])
{
	int x = 1;
	while(x != 0)
	{
		switch(x)
		{
			case 1:
				cout<<"x = 1"<<endl;
				break;
			case 2:
			case 3:
				cout<<"x is 2 or 3"<<endl;
				break;
			case 4:
				cout<<"x is 4"<<endl;
			case 5:
				cout<<"x is 5"<<endl;
				break;
			default:
				cout<<"x is bigger than 5"<<endl;
		}

		cout<<"Enter value of x"<<endl;
		cin>>x;
	}
	return 0;
}