#include <iostream>
using namespace std;
    char i,j,k,reszta;
    int cyfry[8],indeks=0;
int main()
{
    i=125;
    j=i+9;
    printf("i=%d\n",i);
    printf("j=%d\n",j);
    cout<<"j="<<j<<endl;
    k=i;
    while(k>0){
        reszta=k%2;
        cyfry[indeks]=reszta;
        k/=2;
        printf("%d ",reszta);
        indeks++;
    }
    cout<<"cyfra na binarke"<<endl;
    for(k=7;k>=0;k--){
        cout<<cyfry[k]<<" ";
    }
    return 0;
}
