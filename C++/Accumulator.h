template <class T>
class Accumulator
{
private:
	T total;
public:
	Accumulator(T start):total(start){}
	T operator+=(const T& val){total = total + val; return total;}
	T getTotal(){ return total;}
};